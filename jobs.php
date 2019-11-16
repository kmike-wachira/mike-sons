<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style media="screen">
  .contain{
    position: relative;
    margin-left:  25px;
    margin-right: 25px;

  }
  .centertext {
    position: absolute;
    top: 50%;
    right: 50%;
    font-size: 30px;
    border: 1px solid grey;
    padding: 5px;
    border-radius: 7px;
}

</style>
</head>
 <body>
  <?php include 'incs/navbar.php';?>

   <!-- <div class="contain container-fluid" style="height:500px;background-image:url('img/image1.jpg');margin-top:200px;"> -->
   <div class=" topp contain container-fluid w3-center">
       <img src="img/image1.jpg" alt="" height="300" width="95%">
    <div class="centertext">Job Center</div>

    </div>

  <!-- available Jobs -->
  <?php include 'php/fetchjobs.php';?>
    <!-- available jobs -->




</div>
<script type="text/javascript" src="style.js">

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
