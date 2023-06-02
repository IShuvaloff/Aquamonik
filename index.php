<?php
  // if( !isset($_GET['page']) ) {
  //   header( 'Location: '.$_SERVER['PHP_SELF'].'?page=company' );
  //   exit();
  // }
  // header("Location: ./company.php");

  error_reporting( E_ALL & ~E_NOTICE & ~E_WARNING);
  
  require_once("./inc/data.inc.php");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Водоподготовка и очистка воды в Москве и по всей России. Индивидуальный пакет предложений. Быстрый выезд на объект. Работаем с любыми заявками. Звоните: +7 (926) 078-66-92">
  <meta name="keywords" content="аквамоник, про, водоподготовка, систем, очистка воды, монтаж систем водоподготовки, промышленных объектах, частного дома, квартире">
  <meta name="robots" content="index, follow">

  <!-- иконка -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon32.png">
  
  <title><?php echo $title; ?></title>

  <!-- шрифты -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="mailer/css/style.css">

  <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
    rel="stylesheet">

  <!-- normalize -->
  <!-- <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css"> -->

  <!-- бутстрап сетка -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- стили "О компании"-->
  <link rel="stylesheet" href="css/style.css">
  <?php
//! подключение стилей для работы с галереей и изображениями
  switch($page) {
    case 'valves':
    case 'airing':
    case 'columns':
    case 'deferrum':
    case 'carbon':
    case 'soft':
    case 'osmos':
    case 'results':
      echo '<link rel="stylesheet" href="css/highslide.css">';
    default: break;
  }
?>

</head>

<body>
  <!-- ! неподвижный фон -->
  <div class="body-bg"></div>

  <!-- ! страница занимает минимум всю высоту экрана, чтобы подвал остался внизу -->
  <div class="page">

    <!-- ? шапка -->
    <header class="header">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <!-- ЛОГОТИП -->
          <div class="col-12 col-md-6">
            <div class="header-logo">
              <a href="./" class="header-logo-a">
                <img src="./img/logo.webp" alt="AquaMonik">
              </a>
            </div>
          </div>

          <!-- быстрые контакты -->
          <div class="col-12 col-md-5 col-lg-4 col-xl-4 col-xxl-3">
            <div class="row justify-content-end header-contacts">
              <div class="col-12 col-sm-6 col-md-12 col-lg-12 header-text">
                <i class="icon-phone fa-padding-right"></i>
                <a href="tel:+79260786692"> +7 (926) 078-66-92</a>
              </div>
              <div class="col-12 col-sm-6 col-md-12 col-lg-12 header-text">
                <i class="icon-mail-alt fa-padding-right"></i>
                <a href="mailto:aqua-monik@yandex.ru">Aqua-Monik@yandex.ru</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ? меню -->
    <div class="menu">
      <div class="container">
        <!-- мобильная навигация -->
        <div class="m-menu-link">
          <a href="#" class="m-menu-link-close"><i class="icon-cancel"></i></a>
          <a href="#" class="m-menu-link-show"><i class="icon-menu"></i></a>
        </div>

        <nav class="m-menu-bar">
          <?php include "./inc/menu.inc.php"; ?>
        </nav>

        <!-- НАВИГАЦИЯ -->
        <nav class="menu-bar">
          <?php include "./inc/menu.inc.php"; ?>
        </nav>
      </div>
    </div>

    <!-- КОНТЕНТ -->
    <main class="container container-lighten">
      <?php include "./inc/routing.inc.php"; ?>
    </main>

  </div>

  <!-- ПОДВАЛ -->
  <footer class="footer">
    <div class="container">
      <!-- ? контакты -->
      <div class="row">
        <!-- НАЗВАНИЕ -->
        <div class="col-12 col-md-4 footer-row"><i class="icon-building fa-padding-right"></i><span
            class="footer-text"> АкваМоник,
            2020-<?php echo date('Y'); ?></span>
        </div>
        <!-- ТЕЛЕФОНЫ -->
        <div class="col-12 col-md-4 footer-row footer-phones" id="phones">
          <div class="row">
            <div class="col-12 footer-row"><i class="icon-phone fa-padding-right"></i><a href="tel:+79260786692"
                class="footer-text"> +7 (926) 078-66-92</a></div>
            <div class="col-12 footer-row"><i class="icon-phone fa-padding-right"></i><a href="tel:+79296181887"
                class="footer-text"> +7 (929) 618-18-87</a></div>
            <!-- <div class="col-12 footer-row"><i class="icon-phone fa-padding-right"></i><a href="tel:+79775192616"
                class="footer-text"> +7 (977) 519-26-16</a></div> -->
          </div>
        </div>

        <div class="col-12 col-md-4 footer-row">
          <div class="row">
            <!-- ПОЧТА -->
            <div class="col-12">
              <i class="icon-mail fa-padding-right"></i><a
              href="mailto:aqua-monik@yandex.ru" class="footer-text">Aqua-Monik@yandex.ru</a></div>
            <!-- СОЦИАЛЬНЫЕ СЕТИ -->
            <div class="col-12">
              <i class="icon-vkontakte fa-padding-right"></i><a
              href="https://vk.com/public199219051/" class="footer-text" target="_blank">АкваМоник ВКонтакте</a></div>
            <div class="col-12">
              <i class="icon-instagram fa-padding-right"></i><a
              href="https://www.instagram.com/akvamonik/" class="footer-text" target="_blank">АкваМоник Инстаграм</a></div>
          </div>
        </div>
      </div>

      <!-- ? мой копирайт -->
      <div class="footer-copyright">
        <!-- <p class="footer-text">&copy; Разработка <a href="http://ishuvaloff.ru/" target="_blank">iShuvaloff.ru</a></p> -->
        <p class="footer-text">&copy; Разработка <a href="https://vk.com/i.a.shuvalov" target="_blank">iShuvaloff.ru</a></p>
        <p class="footer-text">Изображения для сайта <a href="https://ru.freepik.com/photos/water" target="_blank">ru.freepik.com</a></p>
      </div>
    </div>
  </footer>

  <!-- JQuery -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> -->

<?php
//! подключение скриптов для работы с галереей и изображениями
  switch($page) {
    case 'valves':
    case 'airing':
    case 'columns':
    case 'deferrum':
    case 'carbon':
    case 'soft':
    case 'osmos':
    case 'results':
      echo '<script src="js/highslide-with-gallery.min.js"></script>';
    case 'contacts':
      echo '<script src="mailer/js/script.js"></script>';
    default: break;
  }
?>
  <script src="js/scripts.js"></script>

</body>

</html>