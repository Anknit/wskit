<?php
	if(isset($action) && $action == 'school'){
		if(isset($param)){
			require_once __DIR__.'/../school/'.$param.'.php';
		}
		else{
			require_once __DIR__.'/../html/schoolSearchInterface.php';
		}
	}
?>