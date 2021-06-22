<?php
	$contact_name = $_POST['contact_name'];
	$email = $_POST['contact_email'];
		$contact_name = htmlspecialchars($contact_name);
		$contact_email = htmlspecialchars($contact_email);
			$contact_name = urlcode($contact_name);
			$contact_email = urlcode($contact_email);
				$contact_name = trim($contact_name);
				$contact_email = trim($contact_email);
		//echo $contact_name;
		//echo "<br>";
		//echo $contact_email;
	if (mail("vkfoto@bk.ru", "Заявка с сайта", "имя:".$contact_name.". E-mail:'.$contact_email ,"Form: vkfoto@bk.ru \r\n"))
		{
			echo "Сообщение успешно отправлено";
		} else {
			echo "при отправке сообщения возникли ошибки";
		}?>