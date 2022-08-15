<?php 

  use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
  require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/Exception.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'utf-8';

	$phone = $_POST['user_phone'];

  $theme = "[Заявка с формы]";
  $mail->Body    = 'Пользователь оставил свои данные <br> Телефон: ' . $phone . '';
  
  $mail->isSMTP();     
  $mail->setFrom('tatyanka.cuznetsova.03@gmail.com', 'John Doe');
	$mail->addAddress("tanya.cuznetsova.589@gmail.com");
  $mail->Username = 'tatyanka.cuznetsova.03@gmail.com';            
  $mail->Password = 'sverhi58';   
  $mail->Port = 465;                        


  $mail->Subject = $theme;

  $mail->send(); 

  $mail->Subject = 'Это тема сообщения';
  $mail->Body    = '
	  Пользователь оставил свои данные <br> 
	  Телефон: ' . $phone . '';
  $mail->AltBody = 'Это альтернативный текст';

  if(!$mail->send()) {
      return false;
  } else {
	    return true;
  }
