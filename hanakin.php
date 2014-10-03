<?php

$options = getopt("p:y:m:");

$payday = $options["p"];
$month = $options["m"];
$year = $options["y"];

function hanakin($payday, $month, $year){
	$days = range(1, date("t", mktime(0, 0, 0, $month, 1, $year)));
	
	$buff = array();	
	$buff[] = $year. "/". $month;
	$buff[] = "=================";
	
	$superHanakin = false;
	foreach($days as $day){
		$tmp = array();
		$tmp[] = $day;
		$date = date("w", mktime(0, 0, 0, $month, $day, $year));
		
		if($date == 5 && $day == $payday){
			$tmp[] = " FizzBuzz";
			$superHanakin = true;
		}else if($date == 5){
			$tmp[] = " Fizz";
		}else if($day == $payday){
			$tmp[] = " Buzz";
		}
		
		$buff[] = implode(" ", $tmp);
	}
	
	
	if($superHanakin)$buff[] = superHanakin();
	
	$buff[] = "";
	echo implode("\n", $buff);
}

function superHanakin(){

	return <<<SUPER_HANAKIN
	
＿人人人人人人人人人＿
＞今月はスーパー花金＜
￣Ｙ^Ｙ^Ｙ^Ｙ^Ｙ^Ｙ￣

SUPER_HANAKIN;
}

hanakin($payday, $month, $year);
?>