<div id="feedback_button">
	Задать вопрос \ Сделать заказ
</div>


<div border="smooth" 
	 id="feedback_form" 
	 align="left"
	 name="feedback_form">
	<div>
		<div class="change_type_button"
			 id="question_button"
			 selected="true">
			Задать вопрос
		</div>
		<div class="change_type_button"
			 id="order_button"
			 selected="false">
			Сделать заказ
		</div>
	</div>
	<div id="question">
		<h1>Здесь вы можете задать любой интересующий вас вопрос.</h1>
	 	<form action="#" method="post" id="cForm2">
		   	<label>Ваш вопрос:</label>
		   	<textarea id="posText" class="textarea" border="smooth"></textarea>
		   	<label>Ваше имя:</label>
			<input class="input" border="smooth" value="" id="posName" type="text">
			<label>Ваш email:</label>
			<input class="input" border="smooth" value="" id="posEmail" type="text">
			<button type="button" id="send">Отправить --></button>
		</form>
	</div>
	<div id="order">
		<h1>Здесь вы можете сделать заказ.</h1>
	 	<form action="#" method="post" id="cForm2">
			<label>Ваше имя:</label>
			<input class="input" border="smooth" value="" id="posName" type="text">
			<label>Ваш email:</label>
			<input class="input" border="smooth" value="" id="posEmail" type="text">
		   	<label>Ваш заказ:</label>
		   	<textarea id="posText" class="textarea" border="smooth"></textarea> 
			<button type="button" id="send">Отправить --></button>
		</form>
	</div>

</div>

<script type="text/javascript">
	var feedback_form = document.getElementById("feedback_form");
	var feedback_button = document.getElementById("feedback_button");

	var question_button = document.getElementById("question_button");
	var order_button = document.getElementById("order_button");

	var is_form_active = false;
	var is_ready_to_hide = false;

	question_button.onclick = function() {
		var question = document.getElementById("question");

		question.setAttribute('style', 'display: block;');
		question_button.setAttribute('selected', 'true');

		order.setAttribute('style', 'display: none;');
		order_button.setAttribute('selected', 'false');
	};

	order_button.onclick = function() {
		var order = document.getElementById("order");

		order.setAttribute('style', 'display: block;');
		order_button.setAttribute('selected', 'true');

		question.setAttribute('style', 'display: none;');
		question_button.setAttribute('selected', 'false');
	};

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
			feedback_button.setAttribute('style', 'opacity: 0;');
			is_form_active = true;
		}
	}

	function hideFeedbackForm() {
		if (is_form_active) {
			feedback_form.setAttribute('style', 'display: none;');
			feedback_button.setAttribute('style', 'opacity: 1;');
			is_form_active = false;
			is_ready_to_hide = false;
		}
	}
</script>


<?php
    $to  = "zirecufugu@leeching.net";

	$subject = "Сделан заказ/Задали вопрос";

	$comment = $_POST['posText'];
    $mail = $_POST['posEmail'];
    $name = $_POST['posName'];

	$message = "
	<html>
	    <body>
	        <p> Данное письмо сгенерировано автоматически.
	        <p> На вашем сайте во вкладке \"Сделать заказ\" оставлен запрос следующего содержания:
	        <p> \"$comment\"
	        <p>
    		<p> Имя заказчика: $name </p>
    		<p> Почта заказчика: $mail </p>
	    </body>
	</html>";

	$headers  = "Content-type: text/html; charset=charset=utf-8" . "\r\n";
	$headers .= "From: $mail" . "\r\n";

    mail($to, $subject, $message, $headers);
?>