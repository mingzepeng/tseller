<?php
class DataAction extends Action {

	private $sort_types = array('recent','price','hot');

	public function tasks(){
		$sort_type = $this->_get('sort');
		if($sort_type === null || !in_array($sort_type, $this->sort_types)) $sort_type = 'recent';
		$cache_name = 'tasks_'.$sort_type;
		$data = S($cache_name);
		if($data === false){
			$doc = new DOMDocument();
			$url = C('WEKIE_URL').'/tasks?sort='.$sort_type;
			$html = file_get_contents($url);

			$doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$html);
			$doc->normalizeDocument();

			$tasks_node = $doc->getElementById("J_table_list");

			$tasks = array();
			$i = 0;
			foreach ($tasks_node->getElementsByTagName("tr") as $task_node) {
				$i++;
				if($i === 1) continue;
				$task = array();
				$task_node_infos = $task_node->getElementsByTagName("td");
				$title_node = $task_node_infos->item(0)->getElementsByTagName("a")->item(0);
				$task['title'] = urlencode($title_node->nodeValue);
				$task['url'] = urlencode(C('WEKIE_URL').$title_node->getAttribute('href'));
				$task['price'] = urlencode($task_node_infos->item(1)->nodeValue);
				$task['category'] = urlencode($task_node_infos->item(3)->nodeValue);
				$task['state'] = urlencode($task_node_infos->item(4)->nodeValue);
				$task['last_date'] = urlencode($task_node_infos->item(5)->nodeValue);
				$i++;
				$tasks[] = $task;
			}
			$data = urldecode(json_encode($tasks));
			S($cache_name,$data,3600);
		}
		$this->show($data);
	}

	public function users(){
		$cache_name = 'users_ability'; 
		//S($cache_name,null);
		$data = S($cache_name);
		if($data === false){
			$doc = new DOMDocument();
			$url = C('WEKIE_URL').'/users?ability=1';
			$html = file_get_contents($url);

			$doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$html);
			$doc->normalizeDocument();

			$users_node = $doc->getElementById("J_user_list");
			
			$users = array();
			$i = 0;
			foreach ($users_node->childNodes as $user_node) {
				if($user_node->nodeType !== 1) continue;
				$user = array();
				$infos_node = $user_node->getElementsByTagName("div")->item(1);
				//$user_node_infos = $user_node->getElementsByTagName("td");
				$user['avatar'] =  urlencode($user_node->getElementsByTagName("img")->item(0)->getAttribute("src"));
				$user['url'] = urlencode(C('WEKIE_URL').$user_node->getElementsByTagName("a")->item(1)->getAttribute("href"));
				$user['name'] = urlencode($infos_node->getElementsByTagName("a")->item(0)->nodeValue);
				$user['job_title'] = urlencode($infos_node->getElementsByTagName("h4")->item(0)->nodeValue);
				$user['level'] = urlencode($user_node->getElementsByTagName('li')->item(0)->nodeValue);
				$users[] = $user;
			}
			//var_dump($users);
			$data = urldecode(json_encode($users));
			S($cache_name,$data,3600);
		}
		$this->show($data);
	}
}