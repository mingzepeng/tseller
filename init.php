<?php
session_start();
include "admin/include/config/config.inc.php";
include "admin/include/lib/Common.class.php";
include "app/baseApp.php";
//设置根目录
define('ROOT',dirname(__FILE__));
include ROOT."/lib/common.func.php";

import('Out');

function OSAdminAutoLoad($classname){
    $filename = str_replace('_', '/', $classname) . '.class.php';
    // class类
    $filepath = ADMIN_BASE_CLASS . $filename;
    if (file_exists($filepath)) {
        return include $filepath;
    }else{
		//仅对Class仅支持一级子目录
		//如果子目录中class文件与CLASS根下文件同名，则子目录里的class文件将被忽略

		$handle=opendir(ADMIN_BASE_CLASS);
		
		while (false !== ($file = readdir($handle))) {
			if (is_dir(ADMIN_BASE_CLASS. "/" . $file)) {
				$filepath=ADMIN_BASE_CLASS."/".$file."/".$filename;
				if (file_exists($filepath)) {
					return include $filepath;
				}
			}
		}
	}
    //lib库文件
    $filepath = ADMIN_BASE_LIB . $filename;
    if (file_exists($filepath)) {
        return include $filepath;
    }

    throw new Exception( $filepath . ' NOT FOUND!');
}
spl_autoload_register('OSAdminAutoLoad');


class Controller
{
	
	public $_name = 'Controller';
	
	public static $app = null;
	
	public static function init()
	{	

		$timestamp=time()."000";

		$message = SECRET.'app_key'.APP_KEY.'timestamp'.$timestamp.SECRET;

		$mysign=strtoupper(hash_hmac("md5",$message,SECRET));

		setcookie("timestamp",$timestamp);

		setcookie("sign",$mysign);

		//输入数据转义设置
		@set_magic_quotes_runtime(0);
		
		//对GPC进行转义
		if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc())
		{
			$_POST   = escape_string(stripslashes_deep($_POST));
			$_GET    = escape_string(stripslashes_deep($_GET));
			$_COOKIE = escape_string(stripslashes_deep($_COOKIE));
			$_FILES  = escape_string(stripslashes_deep($_FILES));
		}
	}
	
	public static function Action($app=null,$action=null)
	{
		$app = (is_null($app)) ?  APP.'App' : $app.'App';
	    $action = (is_null($action)) ?  ACTION.'Action' : $action.'Action';
	    $app_path = ROOT.'/app/'.$app.'.php';
		
	    (!is_file($app_path)) && exit('不存在此应用程序');
	    
	    include($app_path);
	    
		$app_class = (strrchr($app,'/') !== false) ? substr(strrchr($app,'/'),1) : $app ;
		
	    if (class_exists($app_class)) 
	        self::$app = new $app_class;
	    else 
	        exit('不存在此应用程序相对应的类程序，请先创建');
		
	    if (!method_exists(self::$app,$action))
	        exit('此应用程序的对象不存在此方法，请先创建');

	    self::$app->$action();
	}
	
	public static function run($app=null,$action=null)
	{
		self::init();	
		self::Action($app,$action);

	}
}

