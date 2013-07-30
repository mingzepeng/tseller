<?php
class indexApp extends baseApp
{
	public $_name = 'index';

	public function indexAction()
	{
		include "main.html";
	}
}