<?php
if(!empty($_POST)){
	$country = trim(strip_tags($_POST['country']));
	setcookie('country',$country);
	header('Location: test.php', TRUE, 303);
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Cookie</title>
   <meta charset="utf-8">
 </head>
 <body>
 		<form action="index.php" method="post">
 			<label>Введите страну Вашего проживания</label><br />
 			<input type="text" name="country"/>
 			<input type="submit" value="Отправить"/>
 		</form>
 </body>
</html>