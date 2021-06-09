<?php 

  include __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Php-Ajax-Dischi</title>
</head>
<body>
  
  <header>
    <img src="img/spotify-logo.png" alt="logo">

    <select name="Seleziona un genere" id="">
      <option value="rock">Rock</option>
      <option value="rock">Pop</option>
      <option value="rock">Jazz</option>
    </select>
  </header>

  <main>
    <div class="container">
      
      <?php foreach ($discs as $disc) { ?>
        <div class="box-album">
        
          <img src="<?php echo $disc['poster'] ?>"
            alt="<?php echo $disc['title'] ?>"
          >
      
  
          <h2> <?php echo $disc['title'] ?> </h2>
          <h5> <?php echo $disc['author'] ?> </h5>
          <h6> <?php echo $disc['year'] ?></h6>
  
        </div>
      <?php } ?>

    </div>

  </main>


</body>
</html>