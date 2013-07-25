<?php
require ('../../include/init.inc.php');
$type = $description = '';
extract ( $_POST, EXTR_IF_EXISTS );


$current_user_info=UserSession::getSessionInfo();
$current_user_id = $current_user_info['user_id'];
$current_date_time =  Common::getDateTime();


if (Common::isPost ()) {

	$input_data = array ('type' => $type,'description'=>$description, 'author_id' => $current_user_id, 'add_time' =>$current_date_time, 'modify_time' => $current_date_time);
	//var_dump($input_data);exit;
	$id = ContentType::add ( $input_data );
	
	if ($id) {
		$input_data['password']="";
		SysLog::addLog ( UserSession::getUserName(), 'ADD', 'ContentType' ,$id, json_encode($input_data) );
		Common::exitWithSuccess ('内容类型添加成功','admin/content/content_types.php');
	}else{
		OSAdmin::alert("error");
	}
	
}


Template::assign("_POST" ,$_POST);
Template::display ( 'content/content_type_add.tpl' );