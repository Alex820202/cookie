<?php
echo '
<p>	Введите свой день рождения:</p>
		<form action="index.php" method="post">
			<input type="text" name="day" placeholder=" 01">
			<label>День</label>
			<select name="month">
				<option value="01">Января</option>
				<option value="02">Февраля</option>
				<option value="03">Марта</option>
				<option value="04">Апреля</option>
				<option value="05">Мая</option>
				<option value="06">Июня</option>
				<option value="07">Июля</option>
				<option value="08">Августа</option>
				<option value="09">Сентября</option>
				<option value="10">Октября</option>
				<option value="11">Ноября</option>
				<option value="12">Декабря</option>
			</select>
			<label>Месяц</label>
			<input type="text" name="year" placeholder=" 2016">
			<label>Год</label>
			<input type="submit" value="Ответить">
		</form>
';
?>