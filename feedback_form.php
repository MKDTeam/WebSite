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
		   	<textarea id="posText" name="posText" class="textarea" border="smooth"></textarea>
		   	<label>Ваше имя:</label>
			<input class="input" border="smooth" name="posName" id="posName" type="text" autocomplete="on" required>
			<label>Ваш email:</label>
			<input class="input" border="smooth" name="posEmail" autocomplete="on" id="posEmail" type="email">
			<input type="submit" onclick="this.function(alert('Ваш запрос отправлен!'))" name="question" value="Отправить -->">
		</form>
	</div>
	<div id="order">
		<h1>Здесь вы можете сделать заказ.</h1>
	 	<form action="#" method="post" id="cForm2">
			<label>Ваше имя:</label>
			<input class="input" border="smooth" name="posName" autocomplete="on" id="posName" type="text">
			<label>Ваш email:</label>
			<input class="input" border="smooth" name="posEmail" autocomplete="on" id="posEmail" type="email">
		   	<label>Ваш заказ:</label>
		   	<textarea id="posText" name="posText" class="textarea" border="smooth"></textarea> 
			<input type="submit" onclick="this.function(alert('Ваш запрос отправлен!'))" name="order" value="Отправить -->">
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
if($_POST['order']) {
    $to  = "vaxo@leeching.net";

	$subject = "Сделан заказ";

	$comment = substr(htmlspecialchars(trim($_POST['posText'])), 0, 1000000); 
    $mail = $_POST['posEmail'];
    $name = substr(htmlspecialchars(trim($_POST['posName'])), 0, 100);

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
}
elseif ($_POST['question']) {
	$to  = "mazik0496@mail.ru";

	$subject = "Задан вопрос";

	$comment = substr(htmlspecialchars(trim($_POST['posText'])), 0, 1000000); 
    $mail = $_POST['posEmail'];
    $name = substr(htmlspecialchars(trim($_POST['posName'])), 0, 100);

	$message = "
	<html>
	    <body>
	        <p> Данное письмо сгенерировано автоматически.
	        <p> На вашем сайте во вкладке \"Задать вопрос\" оставлен запрос следующего содержания:
	        <p> \"$comment\"
	        <p>
    		<p> Имя клиента: $name </p>
    		<p> Почта клиента: $mail </p>
	    </body>
	</html>";

	$headers  = "Content-type: text/html; charset=charset=utf-8" . "\r\n";
	$headers .= "From: $mail" . "\r\n";
	mail($to, $subject, $message, $headers);
}
?>