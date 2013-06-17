<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	//var_dump(DATA_PATH);
    	//exit;
    	//$url = 'http://weike.taobao.com';
		$doc = new DOMDocument();

		$html = file_get_contents(C('WEKIE_URL'));
		//echo $webhtml;
		$doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$html);
		$doc->normalizeDocument();
		$uls = $doc->getElementsByTagName("ul");
		$latest_task_node = null;

		foreach ($uls as $ul) {
			if($ul->getAttribute('class') === 'weike-task-list'){
				$latest_task_node = $ul;
				break;
			}
		}
		if($latest_task_node !== null){
			$latest_tasks = array();
			foreach ($latest_task_node->getElementsByTagName("li") as $node) {
					$task = array();
					$divs = $node->getElementsByTagName("div");
					//$titles =  explode(,'');
					//$title_node = 
					$task[] = $divs->item(0)->getElementsByTagName("span")->item(0)->nodeValue;// $divs->item(0)->item(0)->nodeValue;
					$task[] = $divs->item(1)->nodeValue;
					$task[] = $divs->item(2)->nodeValue;
					$latest_tasks[] = $task;
				}
			$data = json_encode($latest_tasks);
			$file = DATA_PATH . DIRECTORY_SEPARATOR . 'lastest_tasks.json';
			file_put_contents($file , $data);
			echo $data;
		}

			
		// $content = $doc->getElementById('content');
		// $node_list = $content->getElementsByTagName('div');
		// $last
		// foreach ($node_list as $node) {
		// 	if($node->setAttribute('class') === 'weike-category-box')
		// 	# code...
		// 	echo "1";
		// 	//echo $node->nodeValue;
		
		//echo count($node_list);
		//$this->show($content->nodeValue,'utf-8');
		//$content = $doc->getElementById('content');
		//$html = $doc->saveHTML();
		//echo $doc->saveHTML();
		//var_dump($content->nodeValue);
		//exit;
		//$this->show($content,'utf-8');
    }
}