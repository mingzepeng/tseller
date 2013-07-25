<?php
require ('../../include/init.inc.php');
$id = $type = $description = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );

Common::checkParam($id);
$data = ContentType::findone ( $id );

if(empty($data)){
	Common::exitWithError('内容类型不存在',"admin/content/content_types.php");
}

$current_date_time =  Common::getDateTime();


if (Common::isPost ()) {

	$update_data = array ('type' => $type,'description'=>$description, 'modify_time' => $current_date_time);
	//var_dump($input_data);exit;
	$id = ContentType::update ( $id,$update_data );
	
	if ($id) {
		SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'ContentType' ,$id, json_encode($update_data) );
		Common::exitWithSuccess ('更新完成','admin/content/content_types.php');
	}else{
		OSAdmin::alert("error");
	}
	
}

Template::assign("data" ,$data);
Template::display ( 'content/content_type_modify.tpl' );