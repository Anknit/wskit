<?php
	if(isset($action) && $action == 'school'){
		$dir	=	dirname(__FILE__);
		if(isset($param)){
			require_once $dir.'/../school/'.$param.'.php';
		}
		else{
			require_once $dir.'/../html/schoolSearchInterface.php';
		}
	}
?>