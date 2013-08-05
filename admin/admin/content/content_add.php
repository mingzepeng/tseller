<?php
require ('../../include/init.inc.php');
$title = $type_id = $url = $img_url = $description = $content = $tag = $used = $order_no = '';
extract ( $_POST, EXTR_IF_EXISTS );


$current_user_info=UserSession::getSessionInfo();
$current_user_id = $current_user_info['user_id'];
$current_date_time =  Common::getDateTime();


if (Common::isPost ()) {

	$input_data = array ('title'=>$title,'type_id' => $type_id,'url'=>urlencode($url),'description'=>$description, 'content'=>htmlspecialchars($content),'tag'=>$tag,'used'=>$used,'order_no'=>$order_no,'author_id' => $current_user_id, 'add_time' =>$current_date_time, 'modify_time' => $current_date_time);
	if(is_array($img_url) && !empty($img_url))
	{
		$input_data['img_url'] = implode('|',array_map('urlencode', $img_url));
	} 
	//var_dump($input_data);exit;
	$id = Content::add ( $input_data );
	
	if ($id) {
		$input_data['password']="";
		SysLog::addLog ( UserSession::getUserName(), 'ADD', 'Content' ,$id, json_encode($input_data) );
		Common::exitWithSuccess ('内容添加成功','admin/content/contents.php');
	}else{
		OSAdmin::alert("error");
	}
}

$content_type_options_list = array();
$content_types = ContentType::find();
foreach ($content_types as $value) {
	$content_type_options_list[$value['id']] = $value['type'];
}


Template::assign("content_type_options_list" ,$content_type_options_list);
Template::assign("_POST" ,$_POST);
Template::display ( 'content/content_add.tpl' );