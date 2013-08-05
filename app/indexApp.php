<?php
class indexApp extends baseApp
{
	public $_name = 'index';

	public function indexAction()
	{
		$design_url = 'http://weike.taobao.com/task/list.htm?spm=0.0.0.0.RowWV9&label_codes=weike_label_1372649816689_43';
		$spread_url = 'http://weike.taobao.com/task/list.htm?spm=0.0.0.0.mV2qMy&label_codes=weike_label_1372661567001_850';
		$top_rewards_url = 'http://weike.taobao.com/task/list.htm?spm=0.0.0.0.dBH6OU&primary_sort=service_fees&primary_sort_desc=true&second_sort_desc=true&page_size=20&reqStatus=1';
		$design_list = array_slice($this->getWekData($design_url),0,5);
		$spread_list = array_slice($this->getWekData($spread_url),0,5);
		$top_rewards_list = array_slice($this->getWekData($top_rewards_url),0,5);
		include "main.html";
	}

	protected function getWekData($url)
	{
		import('Cache');
		$key = md5($url);
		$cache = new Cache();
		$data = $cache->get($key);
		if($data === false)
		{
			echo "1";
			libxml_use_internal_errors(true);
			//$url = 'http://weike.taobao.com/task/list.htm?spm=0.0.0.0.1PiIm8';
			$html = file_get_contents($url);
			if($html === false) return false;

			$doc = new DOMDocument();
			$doc->loadHTML('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$html);
			$doc->normalizeDocument();
			$data_table = $doc->getElementsByTagName('table')->item(0);
			$data = array();
			//$i = 0;
			foreach ($data_table->getElementsByTagName("tr") as  $data_tr) 
			{
				$data_tds = $data_tr->getElementsByTagName("td");
				if($data_tds->item(0) !== null)
				{
					$node = array();
					$node['title'] = trim($data_tds->item(0)->nodeValue);
					$node['href'] = $data_tds->item(0)->getElementsByTagName('a')->item(0)->getAttribute('href');
					$node['reward'] = $data_tds->item(1)->nodeValue;
					$node['manuscript'] = $data_tds->item(2)->nodeValue;
					$node['public_time'] = $data_tds->item(3)->nodeValue;
					$node['left_time'] = $data_tds->item(4)->nodeValue;
					$node['state'] = $data_tds->item(5)->nodeValue;
					$data[] = $node;
				}

			}
			$cache->put($key,$data);			
		}
		return $data;
	}
}