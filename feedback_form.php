<div border="smooth" id="feedback_form" align="left">
	<h4>Задать новый вопрос:</h4>
	<div id="loadBar" align="center"></div>
	<form action="#" method="post" id="cForm2">
		<label>Ваше имя:</label>
		<input class="input" border="smooth" value="" id="posName" type="text">
		<label>Ваш email:</label>
		<input class="input" border="smooth" value="" id="posEmail" type="text">
	   	<label>Ваше сообщение:</label>
	   	<textarea id="posText" class="textarea" border="smooth"></textarea> 
		<button type="button" id="send">Отправить --></button>
	</form>
</div>

<?php
    $to  = "8230001@inbox.ru";

	$subject = "Заказ на доставку деталей";

	$comment = $_POST['comment'];
    $mail = $_POST['mail'];
    $phonenumber = $_POST['phonenumber'];

	$message = "
	<html>
	    <body>
	        <p> Данное письмо сгенерировано автоматически.
	        <p> На вашем сайте во вкладке \"Сделать заказ\" оставлен запрос следующего содержания:
	        <p> \"$comment\"
	        <p>
    		<p> Телефонный номер заказчика: $phonenumber </p>
    		<p> Почта заказчика: $mail </p>
	    </body>
	</html>";

	$headers  = "Content-type: text/html; charset=charset=utf-8" . "\r\n";
	$headers .= "From: $mail" . "\r\n";

    mail($to, $subject, $message, $headers);

?>