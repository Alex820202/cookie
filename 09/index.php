<?php
$t = time();
if(!empty($_POST)){
	setcookie('day', trim(strip_tags($_POST['day'])), time()+10*365*24*3600);
	setcookie('month', trim(strip_tags($_POST['month'])), time()+10*365*24*3600);
	setcookie('year', trim(strip_tags($_POST['year'])), time()+10*365*24*3600);
	header('Location: index.php', TRUE, 303);
}
if(!isset($_COOKIE['year'])){
	$flag = 0;
}else{
	$flag = 1;
	$this_year = date("Y",$t);
	$this_day_start = mktime(0,0,0,date("m",$t),date("d",$t),date("Y",$t));
	$birth_day_this_year = mktime(0,0,0,$_COOKIE['month'],$_COOKIE['day'],$this_year);
	$delta = ($this_day_start - $birth_day_this_year)/24/3600;
	if($delta == 0){
		$flag = 1;
	}elseif($delta >= 1){
		$flag = 2;
		$next_birth_day = mktime(0,0,0,$_COOKIE['month'],$_COOKIE['day'],$this_year+1);
		$option = ceil(($next_birth_day - $this_day_start)/24/3600);
	}elseif ($delta <= -1){
		$flag = 2;
		$option = - ceil($delta);
	}
}

?>
<!DOCTYPE html>
<html>
 <head>
   <title>День рождения!</title>
   <link rel="stylesheet" href="style.css">
   <meta charset="utf-8">
 </head>
	<body>
		<div class="block">
		<?php if($flag == 0){ 
			include __DIR__.'/enter_birth_day.php';
		}elseif($flag == 1){ 
			include __DIR__.'/birth_day.php';
		}elseif($flag == 2){
			include __DIR__.'/next_birth_day.php';
		}
		?>
	
		</div>
	</body>
</html>