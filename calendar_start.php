<?php
     //$showmonth = $_POST['showmonth'];
	//$showyear = $_POST['showyear'];

	$showmonth = 7;
	$showyear = 2015;
	
	$day_count = cal_days_in_month(CAL_GREGORIAN, $showmonth,$showyear);
	$pre_days = date('w', mktime(0,0,0,$showmonth,1,$showyear));
	$post_days = (6 - (date('w',mktime(0,0,0,$showmonth,$day_count,$showyear))));
	
	echo '<div id= "calendar_wrap">';
	
	echo '<div class ="title_bar">';
	echo '<div class ="previous_month"></div>';
	echo '<div class ="show_month">'.$showmonth.'/'.$showyear.'</div>';
	echo '<div class ="next_month"></div>';
	echo '</div>';
	
	echo '<div class="week_days">';
	echo '<div class="days_of_week">Dom</div>';
	echo '<div class="days_of_week">Seg</div>';
	echo '<div class="days_of_week">Ter</div>';
	echo '<div class="days_of_week">Qua</div>';
	echo '<div class="days_of_week">Qui</div>';
	echo '<div class="days_of_week">Sex</div>';
	echo '<div class="days_of_week">Sab</div>';
	echo '<div class="clear"></div>';
	echo '</div>';
	
	//Cuida dos Meses Anteriores 
	if($pre_days !=0){
		for ($i = 1; $i<=$pre_days; $i++){
			echo '<div class="non_cal_day"></div>';
		}
	}
?>