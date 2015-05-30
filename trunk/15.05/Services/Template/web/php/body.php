<div class="main">  
	<div class="wrap">  		 
		<?php 
		if(isset($view) && $view == 'single'){
		?>
		<div class="column_single">
			<?php
				require_once $phpP.'single.php';
			?>
		</div> 
		
		<?php 
		}
		else{
		?>
		<div class="column_left">
			<?php
				require_once $phpP.'left.php';
			?>
		</div> 
		<div class="column_middle">
			<?php
				require_once $phpP.'center.php';
			?>
		</div>
	    <div class="column_right">
			<?php
				require_once $phpP.'right.php';
			?>
		</div>
		<?php 
		}
		?>
		<div class="clear"></div>
	</div>
</div> 
				