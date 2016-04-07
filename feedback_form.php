<div id="feedback_button">
	Задать вопрос \ Сделать заказ
</div>


<div border="smooth" 
	 id="feedback_form" 
	 align="left"
	 name="feedback_form">
	<div>
		<div class="change_type_button">Задать вопрос</div>
		<div class="change_type_button">Сделать заказ</div>
	</div>
	<div>
	 	<h4>Задать новый вопрос:</h4>
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
	<div>
	 	<h4>Сделать заказ:</h4>
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

</div>

<script type="text/javascript">
	var feedback_form = document.getElementById("feedback_form");
	var feedback_button = document.getElementById("feedback_button");
	var is_form_active = false;
	var is_ready_to_hide = false;

	feedback_button.onclick = function() {
		showFeedbackForm();
	};

	feedback_form.onmouseover = function() {
		is_ready_to_hide = false;
	};
	feedback_form.onmouseout = function() {
		is_ready_to_hide = true;
	};
	window.onclick = function() {
		if (is_ready_to_hide) hideFeedbackForm();
	};

	function showFeedbackForm() {
		if (!is_form_active) {
			feedback_form.setAttribute('style', 'display: block;');
			is_form_active = true;
		}
	}

	function hideFeedbackForm() {
		if (is_form_active) {
			feedback_form.setAttribute('style', 'display: none;');
			is_form_active = false;
			is_ready_to_hide = false;
		}
	}
</script>


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