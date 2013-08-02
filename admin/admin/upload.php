<?php
define('ACCESS', '1');
session_start();
include '../include/class/UserSession.class.php';
$upload_path = dirname(__FILE__).'/../../data/uploads';
if(isset($_SESSION[UserSession::SESSION_NAME]) && !empty($_SESSION[UserSession::SESSION_NAME]))
{


	$tempFile = $_FILES['Filedata']['tmp_name'];
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	


	if (in_array($fileParts['extension'],$fileTypes)) {
		$date = date('Y/m/d');
		$dateArray = explode('/',$date);
		foreach ($dateArray as $value) 
		{
			$upload_path .= '/'.$value;
			if(!is_dir($upload_path))
			{
				try {
					mkdir($upload_path);
				} catch (Exception $e) {
					echo "can't mkdir:".$e->getMessage();
					exit;		
				}
			}
		}
		$newFileName = uniqid().$_FILES['Filedata']['name'];
		$targetFile = $upload_path.'/'.$newFileName;
		move_uploaded_file($tempFile,$targetFile);
		echo $date.'/'.$newFileName;
	} else {
		echo 'Invalid file type.';
	}
}