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

    if( mail("requests@aquamonik-pro.ru", "Заявка с сайта AquaMonik", $text, "From: AquaMonik <requests@aquamonik-pro.ru>") ){
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
<!-- 
  <div class="popup" id="popup">
    <div class="popup__body">
      <div class="popup__content">
        <a href="" class="popup__close">X</a>
        <div class="popup__title">Это модальное окно №1</div>
        <div class="popup__text">
          Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Что алфавит свою напоивший переулка не, назад большого продолжил взгляд?
        </div>
      </div>
    </div>
  </div> -->