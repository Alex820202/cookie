<?php
if(!empty($_POST)){
	$cookie = (int)trim(strip_tags($_POST['design']));
	setcookie('design', $cookie, time()+10*365*24*3600);
	header('Location: index.php', TRUE ,303);
}
if(!isset($_COOKIE['design'])){
	include __DIR__.'/selection_design.php';
}else{
	$option = '0'.$_COOKIE['design'].'/style.css';
	include __DIR__.'/design.php';
}
?>
