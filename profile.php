<?php 
	include_once 'translate.php';
	if(isset($_GET['profile'])){
		

		$idt = $_GET['profile']; 
		$s = 'book';
		$url = "https://managerfashion.com/api/v2/5683nz91rvtpbdasmyrjjmulftm94h/talent/".$idt;
		$json = file_get_contents($url,0,null,null);
		$model_request = json_decode($json);
		$m = $model_request->general;
		if(isset($model_request->book)){
				include_once 'other.php';
		}
	}