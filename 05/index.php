<?php
session_start();
//session_destroy();
$_SESSION['img'] = array('img/c1.jpg','img/c24.jpg','img/c452.jpg', 'img/c759.jpg', 'img/c958.jpg', 'img/c959.jpg');
$_SESSION['price'] = array(12500, 13500, 14500, 16500, 15500, 14500);

if(!empty($_POST)){
	for($i=0;$i<6;$i++){
		$j= $i+1;
		$_SESSION['count'][$i] += trim(strip_tags($_POST['count-0'.$j]));
		$_SESSION['sum'] += trim(strip_tags($_POST['count-0'.$j]))*$_SESSION['price'][$i]; 
	}
	header('Location: index.php', TRUE, 303);
}
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Товары</title>
   <link rel="stylesheet" href="style.css">
   <meta charset="utf-8">
 </head>
	<body>
	<h1>Товары к заказу</h1>
	<?php for($x=1;$x<=ceil(count($_SESSION['price'])/2);$x++){
echo '<div class="line">
		<div class="block">
			<div class="tovar">	
			<img src="'.$_SESSION['img'][(($x*2-1)-1)].'"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-0'.($x*2-1).'" value="'.$_SESSION['count'][(($x*2-1)-1)].'" />
				<label>Количество</label></p>
				<p><input type="text" name="price-0'.($x*2-1).'" value="'.$_SESSION['price'][(($x*2-1)-1)].' руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
		<div class="block">
			<div class="tovar">	
			<img src="'.$_SESSION['img'][(($x*2)-1)].'"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-0'.($x*2).'" value="'.$_SESSION['count'][(($x*2)-1)].'" />
				<label>Количество</label></p>
				<p><input type="text" name="price-0'.($x*2).'" value="'.$_SESSION['price'][(($x*2)-1)].' руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
	</div>';

		
	}
	echo	'<div class="line">
		<p>Вами заказано товаров на общую сумму '.$_SESSION['sum'].' рублей.</p>
	</div>
	</body>
</html>';
	
	/*<div class="line">
		<div class="block">
			<div class="tovar">	
			<img src="img/c1.jpg"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-01" value="" />
				<label>Количество</label></p>
				<p><input type="text" name="price-01" value="12500 руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
		<div class="block">
			<div class="tovar">	
			<img src="img/c24.jpg"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-02" value="" />
				<label>Количество</label></p>
				<p><input type="text" name="price-02" value="13 500-00 руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
	</div>
		<div class="line">
		<div class="block">
			<div class="tovar">	
			<img src="img/c452.jpg"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-03" value="" />
				<label>Количество</label></p>
				<p><input type="text" name="price-03" value="14 500-00 руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
		<div class="block">
			<div class="tovar">	
			<img src="img/c759.jpg"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-04" value="" />
				<label>Количество</label></p>
				<p><input type="text" name="price-04" value="16 500-00 руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
	</div>
		<div class="line">
		<div class="block">
			<div class="tovar">	
			<img src="img/c958.jpg"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-05" value="" />
				<label>Количество</label></p>
				<p><input type="text" name="price-05" value="15 500-00 руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
		<div class="block">
			<div class="tovar">	
			<img src="img/c959.jpg"/>
			</div>
			<div class="tovar">	
			<form action="" method="post">
				<p><input type="number" name="count-06" value="" />
				<label>Количество</label></p>
				<p><input type="text" name="price-06" value="14 500-00 руб" disabled />
				<label>Цена</label></p>
				<p><input class="select" type="submit" value="Положить в корзину"/></p>
			</form>
			</div>
		</div>
	</div>
	<div class="line">
		<p>Вами заказано товаров на общую сумму рублей.</p>
	</div>
	</body>
</html>*/