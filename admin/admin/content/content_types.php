<?php
require ('../../include/init.inc.php');
$method = $page_no = $id = '';
extract ( $_GET, EXTR_IF_EXISTS );
//START 数据库查询及分页数据



if ($method == 'del' && ! empty ( $id )) {
	$result = ContentType::deleteByID( $id );
	if ($result>=0) {
		//$user['password']=null;
		SysLog::addLog ( UserSession::getUserName(), 'DELETE',  'ContentType' ,$id ,'' );
		Common::exitWithSuccess ( '已删除','admin/content/content_types.php' );
	}else{
		OSAdmin::alert("error");
	}
}



$row_count = ContentType::count();
$page_size = PAGE_SIZE;
$page_no=$page_no<1?1:$page_no;
$total_page=$row_count%$page_size==0?$row_count/$page_size:ceil($row_count/$page_size);
$total_page=$total_page<1?1:$total_page;
$page_no=$page_no>($total_page)?($total_page):$page_no;
$start = ($page_no - 1) * $page_size;


$types = ContentType::findByPages($start , $page_size);


$page_html=Pagination::showPager("",$page_no,PAGE_SIZE,$row_count);

//追加操作的确认层
$confirm_html = OSAdmin::renderJsConfirm("icon-pause,icon-play,icon-remove");

// 设置模板变量
$group_options= UserGroup::getGroupForOptions();

$group_options[0] = "全部";
ksort($group_options);



Template::assign ( 'group_options', $group_options );
Template::assign ( 'types', $types );
Template::assign ( '_GET', $_GET );

//分页
Template::assign ( 'page_no', $page_no );
Template::assign ( 'page_html', $page_html );

Template::assign ( 'osadmin_action_confirm' , $confirm_html);
Template::display ( 'content/content_types.tpl' );