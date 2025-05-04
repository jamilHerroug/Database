<?php
$dir = "images/jeux/";
$images = glob($dir . "*.{jpg,png,webp}", GLOB_BRACE);
?>

<div class="banner-container">
  <div class="banner-track">
    <?php foreach ($images as $img): ?>
      <a href="#"><img src="<?= $img ?>" alt=""></a>
    <?php endforeach; ?>
    <?php foreach ($images as $img): // Clone pour boucle infinie ?>
      <a href="#"><img src="<?= $img ?>" alt=""></a>
    <?php endforeach; ?>
  </div>
</div>
