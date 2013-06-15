<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$url = 'http://weike.taobao.com';
		$doc = new DOMDocument();
		$result = $doc->loadHTMLFile($url);
		$this->show($result);
    }
}