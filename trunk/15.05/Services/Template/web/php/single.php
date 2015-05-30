<?php
	if(isset($action) && $action == 'school'){
		if(isset($param)){
			require_once $sclP.$param.'.php';
		}
	}
?>