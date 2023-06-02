<?php
  use PHPMailer\PHPMailer\PHPMailer; // ! не знаю, что это значит
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language'); // ! подключение языка, чтобы ошибки выводились на русском
  $mail->IsHtml(true);

  // от кого письмо
  $mail->setFrom('requests@aquamonik-pro.ru', 'Aquamonik-pro.ru');
  // кому письмо
  $mail->addAddress('aqua-monik@yandex.ru');
  // тема письма
  $mail->Subject = 'Новая заявка с сайта Aquamonik-pro.ru';

  // ? обработка данных письма
  $body = '<h1>Новая клиентская заявка</h1>';
  
  if (trim(!empty($_POST['name']))) {
    $body .= '<p><strong>Имя: </strong> '.$_POST['name'].'</p>';
  }
  if (trim(!empty($_POST['email']))) {
    $body .= '<p><strong>E-mail: </strong> '.$_POST['email'].'</p>';
  }
  if (trim(!empty($_POST['phone']))) {
    $body .= '<p><strong>Телефон: </strong> '.$_POST['phone'].'</p>';
  }
  if (trim(!empty($_POST['message']))) {
    $body .= '<p><strong>Сообщение: </strong> '.$_POST['message'].'</p>';
  }

  $mail->Body = $body;

  // отправляем
  if (!$mail->send()) {
    $message = 'Ошибка отправки. Мы уже работаем над этим!';
  } else {
    $message = 'Спасибо! Ваша заявка отправлена, ожидайте ответа наших специалистов.';
  }

  // формируем файл JSON
  $response = ['message' => $message];
  // возвращаем JSON с соответствующим заголовком в наш javascript
  header('Content-type: application/json');
  echo json_encode($response);
?>