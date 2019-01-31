<?php

if ($_POST['form-type'] == 'order_form') {
	
	//$to = "everywhere777@yandex.ru";
    $to = "ilya@rezerv.pro";
	$order_subject = "Новая заявка с сайта";

	if ( !empty( $_POST ) ) {
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: Rezerve Site <rezerv.pro>' . "\r\n";
		
		$services = "";
		if ( !empty ( $_POST['order-services'] ) && is_array( $_POST['order-services'] )) {
				$services = implode(", ", $_POST['order-services']);
			}
	   
		$sendmessage = "<html><body>
			<p><b>Имя:</b> ".$_POST['order_name']."</p>
			<p><b>Телефон:</b> ".$_POST['order_phone']."</p>
			<p><b>Услуга(-и):</b> ".$services." </p>
			<p><b>Комментарий к заказу:</b> ".$_POST['order-comment']."</p>
			</body></html>";
		
		$sendmessage = strip_tags($sendmessage, '<p><a></br><b>');

		if( mail( $to, $order_subject, $sendmessage, $headers ) ) {
			//echo "<script type='text/javascript'>alert('Сообщение отправлено');</script>";
            header("Location: http://rezerv.pro/soobshhenie-otpravleno/"); // success
            exit;
		}
		else {
			//echo "<script type='text/javascript'>alert('Ошибка');</script>";
            header("Location: http://rezerv.pro/oshibka/"); // failure
            exit;
		}
	}
}
