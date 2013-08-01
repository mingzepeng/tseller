<?php
require ('./include/init.inc.php');
$user_name = $password = $remember = $verify_code = '';
extract ( $_POST, EXTR_IF_EXISTS );

if (Common::isPost ()) {
	if(strtolower($verify_code) != strtolower($_SESSION['osa_verify_code'])){
		OSAdmin::alert("error",ErrorMessage::VERIFY_CODE_WRONG);
	}else{
		try {
			$url = USER_API_URL_."?app=member&action=login&username={$user_name}&password={$password}";
			$result = json_decode(file_get_contents($url));
			if($result && $result->state === 'success')
			{
				//$user_info = User::checkPassword ( $user_name, $password );
				$user_info = User::getUserByName($user_name);
				if ($user_info) {
					if($user_info['status']==1){
					
						User::loginDoSomething($user_info['user_id']);
						
						if($remember){
							$encrypted = OSAEncrypt::encrypt($user_info['user_id']);
							User::setCookieRemember(urlencode($encrypted),30);
						}
						$ip = Common::getIp();
						SysLog::addLog ( $user_name, 'LOGIN', 'User' ,UserSession::getUserId(),json_encode(array("IP" => $ip)));
						Common::jumpUrl ( 'index.php' );
					}else{
						OSAdmin::alert("error",ErrorMessage::BE_PAUSED);
					}
				} else {
					OSAdmin::alert("error",ErrorMessage::USER_OR_PWD_WRONG);
					SysLog::addLog ( $user_name, 'LOGIN','User' ,'' , json_encode(ErrorMessage::USER_OR_PWD_WRONG) );
				}					
			}
			else
			{
				OSAdmin::alert("error",$result->info);
			}
			
		} catch (Exception $e) {
			OSAdmin::alert("error",'登陆错误:'.$e->getMessage());
		}

	}
}
Template::assign ( '_POST',$_POST );
Template::assign ( 'page_title','登入' );
Template::Display ( 'login.tpl' );