<?php
if(!defined('ACCESS')) {exit('Access denied.');}

class Content extends ContentBase {

	protected static $columns = 'id,title,type_id,url,img_url,description,content,tag,used,order_no,author_id,add_time,modify_time';

	protected static $table_name = 'content';
}
