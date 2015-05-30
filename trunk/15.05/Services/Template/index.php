<?php
if(isset($auth) && $auth='true'){
	include "Template/app/detect.php";
	include "Template/app/config.php";

	@extract($_GET);

	include $phpP.'require.php';
	include $phpP.'header.php';
	include $phpP.'body.php';
	include $phpP.'footer.php';
}
else{
	header('Location: ./../');
}
?>
