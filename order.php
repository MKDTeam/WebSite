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
			<input class="field" name="mail" type="email" size="30" required >
			<b>Ваш телефон:</b>
			<input class="field" name="phonenumber" type="text" size="30" maxlength="11" pattern="[0-9]{11}" required >
		</p>
		<p><input id="submit_button" name="send" type="submit" value="Отправить"></p>
	</form>
</div>

<?php
    $to  = "suxah@walkmail.ru";

	$subject = "Заказ на доставку деталей";

	$comment = $_POST['comment'];
    $mail = $_POST['mail'];
    $phonenumber = $_POST['phonenumber'];

	$message = "
	<html>
	    <head>
	        <title>Birthday Reminders for August</title>
	    </head>
	    <body>
	        <p>Here are the birthdays upcoming in August!</p>
	        <p> $comment </p>
    		<p> $mail </p>
    		<p> $phonenumber </p>
	    </body>
	</html>";

	$headers  = "Content-type: text/html; charset=charset=utf-8 \r\n";

	mail($to, $subject, $message, $headers);
	echo("Complite");
?>