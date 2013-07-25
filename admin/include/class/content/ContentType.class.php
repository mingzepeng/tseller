<?php
if(!defined('ACCESS')) {exit('Access denied.');}

class ContentType extends ContentBase {

	protected static $columns = 'id,type,description,author_id,add_time,modify_time';

	protected static $table_name = 'content_type';


}
