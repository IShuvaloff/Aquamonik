<article>
  <h1>Наши работы</h1>
  <p>Предлагаем Вам ознакомиться с фотографиями, сделанными в местах проведения монтажных работ специалистами компании <strong>«АкваМоник»</strong>.</p>
  
  <div class="set">

<?php
  for ($i = $results_max_img_number; $i > 0; $i--) {
    $img_link = "img/results/$i.webp";
    if( !file_exists($img_link) ){
      continue;
    }
?>
    <div class="set-item set-item__gallery">
      <a href="<?php echo get_lg_img_link($img_link, 'webp'); ?>" class="highslide" onclick="return hs.expand(this)">
        <img src="<?php echo $img_link; ?>" alt=<?php echo $i; ?> title="Кликните для увеличения" >
      </a>
    </div>
<?php
  }
?>

  </div>

  <button type="button" class="form__button" style="max-width: 300px; margin: 0 auto; height: 50px" onclick="document.location='./?page=contacts#form'">Оставить заявку</button>
</article>