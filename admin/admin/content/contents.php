<?php
require ('../../include/init.inc.php');
$method = $page_no = $id = '';
extract ( $_GET, EXTR_IF_EXISTS );
//START 数据库查询及分页数据



if ($method == 'del' && ! empty ( $id )) {
	$result = Content::deleteByID( $id );
	if ($result>=0) {
		//$user['password']=null;
		SysLog::addLog ( UserSession::getUserName(), 'DELETE',  'Content' ,$id ,'' );
		Common::exitWithSuccess ( '已删除','admin/content/contents.php' );
	}else{
		OSAdmin::alert("error");
	}
}



$row_count = Content::count();
$page_size = PAGE_SIZE;
$page_no=$page_no<1?1:$page_no;
$total_page=$row_count%$page_size==0?$row_count/$page_size:ceil($row_count/$page_size);
$total_page=$total_page<1?1:$total_page;
$page_no=$page_no>($total_page)?($total_page):$page_no;
$start = ($page_no - 1) * $page_size;

$sql = "SELECT jh_content.id, jh_content.type_id, jh_content_type.type, jh_content.tag, jh_content.used, jh_content.order_no, osa_user.user_name as author, jh_content.title, jh_content.url, jh_content.author_id, jh_content.add_time, jh_content.modify_time FROM jh_content LEFT JOIN osa_user ON jh_content.author_id = osa_user.user_id LEFT JOIN jh_content_type ON jh_content.type_id = jh_content_type.id limit {$start},{$page_size}";
//echo $sql;
$contents = Content::findBySql($sql);


//var_dump($contents);
$page_html=Pagination::showPager("",$page_no,PAGE_SIZE,$row_count);

//追加操作的确认层
$confirm_html = OSAdmin::renderJsConfirm("icon-pause,icon-play,icon-remove");

// 设置模板变量
$group_options= UserGroup::getGroupForOptions();

$group_options[0] = "全部";
ksort($group_options);



Template::assign ( 'group_options', $group_options );
Template::assign ( 'contents', $contents );
Template::assign ( '_GET', $_GET );

//分页
Template::assign ( 'page_no', $page_no );
Template::assign ( 'page_html', $page_html );

Template::assign ( 'osadmin_action_confirm' , $confirm_html);
Template::display ( 'content/contents.tpl' ); 	