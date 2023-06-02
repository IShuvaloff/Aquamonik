<article>
  <h1><?= $equipment[$page]; ?></h1>
  <p><?= $equipment_description[$page]; ?></p>

  <div class="set">

<?php
  //? высчитываем размер списка
  $equipment_subitems_keys = get_equipment_subitems_keys($page);
  foreach($equipment_subitems_keys as $subitem_key) { 
?>

    <section class="set-item" >
      <h3><?php echo $equipment[$subitem_key]; ?></h3>

<?php
  //! для списка из 1 элемента используем строковое размещение содержимого
  if( count($equipment_subitems_keys) == 1 ){
    echo "<div class='row align-items-center'>";
    echo "  <div class='col-12 col-md-6 col-lg-4 col-xl-3'>";
  }
?>

        <a href="<?php echo get_equipment_lg_img_link($subitem_key, 'png'); ?>" class="highslide" onclick="return hs.expand(this)">
          <img src="<?php echo $equipment_img_links[$subitem_key]; ?>" alt="<?php echo $equipment[$subitem_key]; ?>" title="Кликните для увеличения" >
        </a>

<?php
  //? закрываем блок с картинкой для списка из 1 элемента
  if( count($equipment_subitems_keys) == 1 ){
    echo "  </div>";
    echo "    <div class='col-12 col-md-6 col-lg-8 col-xl-9'>";
  }
?>

        <p class="col"><?php echo $equipment_description[$subitem_key]; ?></p>

<?php
  //? закрываем блок с текстом для списка из 1 элемента
  if( count($equipment_subitems_keys) == 1 ){
    echo "    </div>";
    echo "  </div>";
  }
?>

    </section>

<?php 
  } 
?>

  </div>

</article>