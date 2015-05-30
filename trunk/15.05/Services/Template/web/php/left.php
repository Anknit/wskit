<?php
	if(isset($action) && $action == 'school'){
		include $htmP.'schoolSearchInterface.html';
	}
	else{
		include $htmP.'schoolSearchInterface.html';
		include $htmP.'quickEvent.html';
		include $htmP.'quickRanking.html';
		include $htmP.'quickResult.html';
}
?>