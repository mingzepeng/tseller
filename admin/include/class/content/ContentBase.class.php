<?php
if(!defined('ACCESS')) {exit('Access denied.');}
class ContentBase extends Base {

	protected static $table_prefix = JH_TABLE_PREFIX;

	protected static $table_pk = 'id';

	protected static $db_container = array();

	protected static $columns = '*';

	public static function count($condition = '') {
		$db=self::__instance();
		//var_dump(static::getTableName());
		$num = $db->count ( static::getTableName(), $condition );
		return $num;
	}

	public static function getTableName(){
		return static::$table_prefix.static::$table_name;
	}

	public static function findone($id){
		$db=self::__instance();
		$table = self::getTableName();
		$pk = static::$table_pk;
		$sql = "select * from {$table} where $pk='{$id}'";
		$list=$db->query($sql)->fetch();
		return $list;
	}

	public static function find($condition=''){
		$db=self::__instance();
		$table = self::getTableName();
		return $db->query("select * from {$table} ".$db->where_clause($condition))->fetchAll();
	}

	public static function findBySql($sql){
		$db=self::__instance();
		$query = $db->query($sql);
		return $query ? $query->fetchAll() : false;
	}

	public static function findByPages($start , $page_size){
		$db=self::__instance();
		$table = self::getTableName();
		return $db->select($table,static::$columns,array('LIMIT'=>array($start,$page_size)));
	}

	public static function deleteByID($id){
		$db=self::__instance();
		$table = self::getTableName();
		$pk = static::$table_pk;
		return $db->exec("delete from {$table} where $pk='{$id}'");
	}

	public static function add($data){
		if (! $data || ! is_array ( $data )) {
			return false;
		}
		$db=self::__instance();
		$id = $db->insert ( self::getTableName(), $data );
		return $id;
	}

	public static function update($id,$data) {
		
		if (! $data || ! is_array ( $data )) {
			return false;
		}
		$db=self::__instance();
		$pk = static::$table_pk;
		$condition=array( $pk =>$id);
		$id = $db->update ( self::getTableName(), $data, $condition );
		return $id;
	}
}
