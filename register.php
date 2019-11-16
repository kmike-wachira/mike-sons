<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>

  <?php include 'incs/navbar1.php';?>

<div class="row container" style="margin-top:50px">
  <div class="col-md-3">
  </div>
  <div class="col-md-6 col-sm-12 w3-card-8">
    <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Name</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Name" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="text" class="form-control" id="pwd" placeholder="mike$sons@mail.com" name="pswd">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check-inline">
       <label class="form-check-label" for="radio1">
         <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>User
       </label>
     </div>
     <div class="form-check-inline">
       <label class="form-check-label" for="radio2">
         <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Supplier
       </label>
     </div>
     <div class="form-check-inline">
       <label class="form-check-label">
         <input type="radio" class="form-check-input">Worker
       </label>
     </div><br>
     <div class="w3-center">
       <button type="submit" class="btn btn-primary">Submit</button>

     </div>
</form>
  </div>
  <div class="col-md-3">
  </div>

</div>
<script type="text/javascript" src="style.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
