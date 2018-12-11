<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		<p><input type="text" placeholder="Ваше имя" value="" name="name"></p>
		<p><input type="text" placeholder="Ваш телефон" value="" name="tel"></p>
		<p><input type="text" placeholder="Ваша почта" value="" name="post"></p>
		<p><input type="text" list="event" placeholder="Событие" value="" name="event"></p>
	   <datalist id="event">
	    <option>Свадьба</option>
	    <option>Корпоратив</option>
	    <option>Детский утренник</option>
	    <option>День рождения</option>
	   </datalist>
	   <p><input type="text" placeholder="Дата мероприятия" value="" name="date"></p> 
		<p><input type="submit" placeholder="Отправить"></p>
	</form>

	<?php 

		print_r($_GET);
		if((isset($_GET['name'])&&$_GET['name']!="")&&(isset($_GET['tel'])&&$_GET['tel']!="")&&(isset($_GET['post'])&&$_GET['post']!="")){
			$to = 'mail@yandex.ru';
        $subject = 'Обратный звонок';
        $message = 'Поступило письмо от '.$_GET['name']." ".$_GET['post']." Проводится ". $_GET['event']." ".$_GET['date'] ." просит перезвонить на ".$_GET['tel'];
        $headers  = "Content-type: text/html; charset=utf-8";
        mail($to, $subject, $message, $headers); 
}
	 ?>
</body>
</html>