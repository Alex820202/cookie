<?php
echo '
<!DOCTYPE html>
<html>
 <head>
   <title>Товары</title>
   <link rel="stylesheet" href="'.$option.'">
   <meta charset="utf-8">
 </head>
	<body>
	<h1>Товары к заказу</h1>
<div class="line">
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
</html>
';