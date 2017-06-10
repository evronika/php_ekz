<?php
	if (isset($_REQUEST['doSubmit'])){
		if (isset($_REQUEST['name'])&&!empty($_REQUEST['name'])&&(isset($_REQUEST['e-mail']))&&!empty($_REQUEST['e-mail'])&&(isset($_REQUEST['message']))&&!empty($_REQUEST['message'])){
			mail('test@test.ru', $_REQUEST['text'], $_REQUEST['message']);
			echo "<div>Ваше письмо отправлено.</div>";
		}
			
		
		else{
			header('Location: '.$_SERVER['HTTP_REFERER']);

		}
	}

