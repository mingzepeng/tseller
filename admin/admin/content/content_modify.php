<?php
require ('../../include/init.inc.php');
$id = $title = $type_id = $url = $img_url = $description = $content = $tag = $used = $order_no = '';
extract ( $_REQUEST, EXTR_IF_EXISTS );

Common::checkParam($id);


if (Common::isPost ()) {

	$current_date_time =  Common::getDateTime();
	$update_data = array ('title'=>$title,'type_id' => $type_id,'url'=>urlencode($url),'description'=>$description, 'content'=>htmlspecialchars($content),'tag'=>$tag,'used'=>$used,'order_no'=>$order_no, 'modify_time' => $current_date_time);
	if(is_array($img_url) && !empty($img_url))
	{
		$update_data['img_url'] = implode('|',array_map('urlencode', $img_url));
	}
	$id = Content::update ( $id,$update_data );
	if ($id) {
		SysLog::addLog ( UserSession::getUserName(), 'MODIFY', 'Content' ,$id, json_encode($update_data) );
		Common::exitWithSuccess ('更新完成','admin/content/contents.php');
	}else{
		OSAdmin::alert("error");
	}
	
}

$data = Content::findone ( $id );

if(empty($data)){
	Common::exitWithError('该内容不存在',"admin/content/contents.php");
}
$data['content'] = htmlspecialchars_decode($data['content']);
$data['url'] = urldecode($data['url']);
$data['img_url'] = !empty($data['img_url']) ? array_map('urldecode', explode('|', $data['img_url'])) : array();
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