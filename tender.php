<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <!-- <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/> -->
   <link rel="stylesheet" href="w3.css">
<!-- Add the new slick-theme.css if you want the default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
  <?php include 'incs/navbar.php';?>
<div class=" topp container-fluid">

</div>

<div class="container ">
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="cimage" src="img/tender.jpg" alt="Tender" width="1100" >
      <div class="carousel-caption">
        <h3>Tender</h3>
        <p>Aplly for any tender that you feel you can manage.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="cimage"  src="img/Tenders1.png" alt="Tender" width="1100" >
      <div class="carousel-caption">
        <h3>Product</h3>
        <p> We want those raw materials Apply.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="cimage"  src="img/tender.png" alt="New York" width="1100" >
      <div class="carousel-caption">
        <h3>Contract</h3>
        <p>Have skills but no work why dont you try your luck here.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<?php include 'php/fetchtenders.php'; ?>


<script type="text/javascript" src="style.js">

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
