<?php
class userApp extends baseApp
{

	public function loginAction()
	{
		if(isset($_GET['code']) && !empty($_GET['code']) && empty($_SESSION['taobao_user_nick']))
		{
			$code = $_GET['code'];
			$url = 'https://oauth.taobao.com/token';
			$postfields= array('grant_type'     => 'authorization_code',
			                 'client_id'     => APP_KEY,
			                 'client_secret' => SECRET,
			                 'code'          => $code,
			                 'redirect_uri'  => CHANNEL_URL
			);
			try {
				$token = json_decode(curl($url,$postfields));
				if($token !== null)
				{
					$_SESSION['access_token'] = $token->access_token;
					$_SESSION['taobao_user_nick'] = urldecode($token->taobao_user_nick);		
				}

			} catch (Exception $e) {
				$msg = '登陆失败'.$e->getMessage();
			}
			//var_dump($this->checkBind($_SESSION['taobao_user_nick']));
			if(!$this->checkBind($_SESSION['taobao_user_nick'])) 
				$_SESSION['bind'] = '1';

		}
		//var_dump($_SESSION);
		//include "main.html";
		header("Location:index.php");
	}

	public function logoutAction()
	{
		$_SESSION = array();
		session_destroy();
		header("Location:index.php");
		//include "main.html";
	}

	public function bindAction()
	{
		if(!isset($_SESSION['taobao_user_nick']) || empty($_SESSION['taobao_user_nick'])) 
			Out::ajaxError('未登录，请先用淘宝账号登陆再进行绑定！谢谢');

		$db = $this->getInstanceDb();
		$data = $db->select("jh_user",'*',array('taobao_id'=>$_SESSION['taobao_user_nick']));
		if($data !== false && isset($data['user_name']) && !empty($data['user_name']))
			Out::ajaxError('该账号已经绑定，请勿重复操作');
		if(!isset($_POST['jh_username']) || !isset($_POST['jh_password'])) 
			Out::ajaxError('账号或者密码不能为空');

		$url = USER_API_URL_."?app=member&action=login&username={$_POST['jh_username']}&password={$_POST['jh_password']}";

		$user = null;
		try {
			$user = json_decode(file_get_contents($url));
			if($user->state === 'success')
			{
				$user_data = array(
					'user_id' => $user->data->uid,
					'user_name'=> $user->data->username,
					'taobao_id'=> $_SESSION['taobao_user_nick'],
					'password' => uniqid(),
					'login_time'=> time(),
					'login_ip' => Common::getIp(),
					'status' => 1,
					'user_group' => '2',
					'template'=>'default'
				);
				$result = $db->insert('jh_user',$user_data);
				if($result !== false )
				{
					unset($_SESSION['bind']);
					$_SESSION['user_name'] = $user->data->username;
					Out::ajaxSuccess('绑定成功^_^');
				}
				else
				{
					Out::ajaxError('绑定失败1，请重试');
				}
			}
			else
			{
				Out::ajaxOut($user->state,$user->info);
			}
			
		} catch (Exception $e) {
			Out::ajaxError('绑定失败，请重试');
		}
	}

	protected function checkBind($taoba_id)
	{
		$result = false;
		$db = $this->getInstanceDb();
		$data = $db->select("jh_user",'*',array('taobao_id'=>$taoba_id));

		if($data[0] !== false && isset($data[0]['user_name']) && !empty($data[0]['user_name']))
			$result = true;

		return $result;
	}
}