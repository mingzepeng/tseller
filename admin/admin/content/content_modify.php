<?php
require ('../../include/init.inc.php');
$id = $title = $type_id = $url = $img_url = $description = $content = $tag = $used = $order_no = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );

Common::checkParam($id);


if (Common::isPost ()) {
	$current_date_time =  Common::getDateTime();
	$update_data = array ('type' => $type,'description'=>$description, 'modify_time' => $current_date_time);
	$id = Content::update ( $id,$update_data );
	if ($id) {
		SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Content' ,$id, json_encode($update_data) );
		Common::exitWithSuccess ('更新完成','admin/content/content_types.php');
	}else{
		OSAdmin::alert("error");
	}
	
}

$data = Content::findone ( $id );

if(empty($data)){
	Common::exitWithError('该内容不存在',"admin/content/contents.php");
}
$data['content'] = htmlspecialchars_decode($data['content']);

$content_type_options_list = array();
$content_types = ContentType::find();
foreach ($content_types as $value) {
	$content_type_options_list[$value['id']] = $value['type'];
}
$content_used_options_list = array('1'=>'是','0'=>'否');

Template::assign("content_type_options_list" ,$content_type_options_list);
Template::assign("content_used_options_list" ,$content_used_options_list);
Template::assign("data" ,$data);
Template::display ( 'content/content_modify.tpl' );