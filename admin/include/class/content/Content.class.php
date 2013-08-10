<?php
if(!defined('ACCESS')) {exit('Access denied.');}

class Content extends ContentBase {

	protected static $columns = 'id,title,type_id,url,img_url,description,content,tag,used,order_no,author_id,add_time,modify_time';

	protected static $table_name = 'content';

	public static function getContentsByTypeName($type)
	{
		$table_name = self::$table_prefix.'content';
		$content_type_table = self::$table_prefix.'content_type';
		$sql = "select {$table_name}.*,{$content_type_table}.type from {$table_name} inner join {$content_type_table} on {$table_name}.type_id = {$content_type_table}.id where {$content_type_table}.type = '{$type}'";
		$datas = self::findBySql($sql);
		if(!empty($datas))
		{
			foreach ($datas as $key => $data) 
			{
				$datas[$key]['url'] = urldecode($datas[$key]['url']);
				$datas[$key]['content'] = htmlspecialchars_decode($datas[$key]['content']);
				$datas[$key]['img_url'] = !empty($datas[$key]['img_url']) ? array_map('urldecode', explode('|', $datas[$key]['img_url'])) : array();
			}
		}
		return $datas;
	}

	public static function getContentsByTypeId($typeid)
	{
		
	}
}
