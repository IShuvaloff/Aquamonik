<?php
  //проверяем, существуют ли переменные в массиве POST
  if( isset($_POST['fio']) and (isset($_POST['email']) or isset($_POST['phone'])) ){
    $fio = $_POST['fio'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $body = $_POST['body'];
    //
    $fio = htmlspecialchars($fio);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $body = htmlspecialchars($body);
    //
    $fio = urldecode($fio);
    $phone = urldecode($phone);
    $email = urldecode($email);
    $body = urldecode($body);
    //
    $fio = trim($fio);
    $phone = trim($phone);
    $email = trim($email);
    $body = trim($body);
    //
    $text = "Отправитель: $fio\n".
            "Телефон: $phone\n".
            "Email: $email\n".
            "Сообщение: $body";

    if( mail("requests@mail.ru", "Заявка с сайта AquaMonik", $text, "From: AquaMonik <requests@mail.ru>") ){
      echo "Сообщение успешно отправлено";
    } else {
      echo "При отправке сообщения возникли ошибки";
      //echo $fio." ".$email." ".$phone." ".$body;
    }
  }
?>

<form id="request-form" action="<?=$_SERVER['REQUEST_URI'];?>" method="post">
  <input type="text" name="fio" placeholder="Укажите ФИО" required>
  <input type="tel" name="phone" pattern='+7[0-9]{3} [0-9]{3}-[0-9]{2}-[0-9]{2}' placeholder="Укажите телефон" required>
  <input type="email" name="email" placeholder="Укажите e-mail" required>
  <textarea name="body" form="request-form" cols="30" rows="5" placeholder="Введите текст"></textarea>
  <input type="submit" value="Отправить">
</form>