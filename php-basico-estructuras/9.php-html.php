<?php

$animals = [
  "https://randomfox.ca/images/1.jpg",
  "https://randomfox.ca/images/2.jpg",
  "https://randomfox.ca/images/3.jpg",
];

$banner_styles = [
  "display:flex",
  "align-items:center",
  "justify-content:center",
  "height:100px",
  "width:700px",
  "font-family:monospace",
  "font-size:22px",
  "color:#fff",
  "background:#5a3fd1",
  "border-radius:8px",
];

$banner = implode(";", $banner_styles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>
    a.banner:hover {
      opacity: 0.8;
    }
  </style>

</head>
<body style="display:grid;place-items:center;height:90vh;">
  
  <h1 style="font-family:monospace;">Hola mundo desde HTML junto a PHP 🤝</h1>

  <div style="display:flex; gap:2rem;">
    <?php
      foreach ($animals as $animal) {
        echo "<img src='$animal' alt='Zorrito' height='300px' style='border-radius:8px'>";
      }
    ?>
  </div>

  <?php
    echo <<<EOL
      <a class="banner" style="$banner" href="#">
        Repositorio
      </a>
    EOL;
  ?>

</body>
</html>