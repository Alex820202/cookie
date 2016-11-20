<?php
$time = time();
if(!isset($_COOKIE['last'])){
	$t = 0;
}else{
	$t = floor(($time - $_COOKIE['last'])/(24*3600));
}
setcookie('last',$time,$time+10*365*24*3600);

?>
<!DOCTYPE html>
<html>
 <head>
   <title>Баннер</title>
   <link rel="stylesheet" href="style.css">
   <meta charset="utf-8">
 </head>
	<body>
	<div class="banner">
	<?php if(!isset($_COOKIE['last']) && $t==0){
		echo 'Вы первый раз на нашем сайте!';
	}elseif(isset($_COOKIE['last']) && $t==0){
		echo 'Вы сегодня уже были на нашем сайте!';
	}else{
		echo 'Вы не были на нашем сайте '.$t.' дней.';
	}
		 ?>
	</div>
	</body>
</html>
