<?php
if(isset($_COOKIE['count'])){
	setcookie('count',1,time()+365*24*3600);
}
setcookie('count',$_COOKIE['count']+1,time()+365*24*3600);
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
		<p>Вы посетили наш сайт <?php echo $_COOKIE['count']; ?> раз!</p>
	</div>
	</body>
</html>
