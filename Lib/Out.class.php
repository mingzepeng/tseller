<?php
if (!defined('ACCESS')) die('access deined');
class Out
{
	const succes = 'success';
	
	const error = 'error';
	
	const fail = 'error';
	
	const warn = 'warn';

	
	public static function ajaxSuccess($info,$data=null)
	{
	    return self::ajaxOut(self::succes,$info,$data);
	}
	
	public static function ajaxError($info,$data=null)
	{
		self::ajaxOut(self::error,$info,$data);
		exit;
	}
	
	public static function ajaxOut($state,$info,$data=null)
	{
		$info = urlencode($info);
	    if(isset($data)) 
	    	$out = is_array($data)? array('state'=>$state , 'info'=> $info,'data'=>$data) : array('state'=>$state , 'info'=> $info,'data'=>array('param'=>$data));
		else
			$out = array('state'=>$state , 'info'=>$info );
		header("Content-type: text/html; charset=utf-8");
		$json = stripslashes(urldecode(json_encode($out)));
		echo $json;
		return $json;
	}
}

?>