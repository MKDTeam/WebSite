<div class="Content">
	<div id="Header">
		Составление заказа
	</div>
	<p>Здесь вы можете составить заказ.
	<p>Введите данные о деталях которые хотите заказать в поле ниже:
	<form action="index.php?page=order" method="post" name="textarea">
		<textarea id="Comment" name="comment" autofocus="true" rows="12"></textarea>
		<p>
			<b>Ваш email:</b>
			<input class="field" name="mail" type="email" size="30" autocomplete="on" required="Пожалуйста, заполните это поле" >
			<b>Ваш телефон:</b>
			<input class="field" name="phonenumber" type="text" size="30" maxlength="11" pattern="[0-9]{11}" autocomplete="on" required="Пожалуйста, заполните это поле" >
		</p>
		<p><input id="submit_button" name="send" type="submit" value="Отправить"></p>
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