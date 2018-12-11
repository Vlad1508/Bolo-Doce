<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$mysqli= mysqli_connect("localhost", "root", "", "torts");
		mysqli_set_charset($mysqli,'utf8');
		$res= mysqli_query($mysqli, "SELECT * FROM `fillings` WHERE 1");
		while ($row=mysqli_fetch_assoc($res)) {
			$fillings[] = $row;}


print_r($fillings);
print_r($_GET);

$guests = $_GET['people']; //количество человек 
$mass = $guests *0.15; //Вес торта = кол-во человек * на 150 грамм т.е. в киллограммах
// Расчет стоимости в зависимости от начинки торта
foreach ($fillings as $key => $value) 
{
	if (!empty($_GET) && ($_GET['filling'] == $fillings[$key]['name']) )
		{
			$price = $mass * $fillings[$key]['price'];
		}

}

echo "<hr>". $price ;
 ?>
	<form action="calc.php">
	<p><input type="text" list="event" placeholder="Событие" value="" name="event"></p>
	   <datalist id="event">
	    <option>Свадьба</option>
	    <option>Корпоратив</option>
	    <option>Детский утренник</option>
	    <option>День рождения</option>
	   </datalist> 
<p><input type="text" list="filling" placeholder="Начинка" value="" name="filling"></p>
	   <datalist id="filling">
	   	<?php foreach ($fillings as $key => $value) {                             // Вывод списка наименований начинок
						echo "<option>{$fillings[$key]['name']}</option>";
} ?>
	   </datalist> 
<p><input type="text" placeholder="Количество человек" value="" name="people"></p>
	   <p><input type="submit" placeholder="Отправить"></p>
	</form>

<?php  
if (!empty($_GET)) {
	echo "Вы хотите заказать торт, для того чтобы отпраздновать ". $_GET['event']." с начинкой ".$_GET['filling'].", рекомендуем заказать ".$mass." кг".". Это будет стоить"." ". $price . " рублей";
}
?>



</body>
</html>

