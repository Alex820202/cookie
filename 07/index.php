<?php
$t = time();
if(!empty($_POST['down'])){
	setcookie('down',1,$t+30*24*3600);	
	header('Location: index.php', TRUE, 303);
}
if(!isset($_COOKIE['count'])){
	setcookie('count',1,$t+365*24*3600);

} else{
	setcookie('count',$_COOKIE['count']+1,$t+365*24*3600);
}

?>
<!DOCTYPE html>
<html>
 <head>
   <title>Баннер</title>
   <link rel="stylesheet" href="style.css">
   <meta charset="utf-8">
 </head>
	<body>
	<?php if(!isset($_COOKIE['down'])){
			echo '
	<div class="banner">
		<p>Вы посетили наш сайт '.$_COOKIE['count'].' раз!</p>
			<form action="index.php" method="post">
		<input type="submit" name="down" value="Не показывать больше!">
		</form>		
	</div>';
	} ?>
	</body>
</html>
