<?php
  session_start();
 ?>
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

  <?php
    include 'incs/adminNav.php';
    include 'php/admin.php';
  // Login();

  ?>
  <div class=" well w3-center p-2" style="margin-top:250px;background-color:#ccccff;">
 <h2>Contracts</h2>
  </div>
  <?php
    showTender();
      ?>

<div class="well w3-center p-2" style="margin-top:90px;background-color:#ccccff;">
<h2>Jobs</h2>
</div>
<?php
showJobs();
 ?>
 <div class="well w3-center p-2" style="margin-top:90px;background-color:#ccccff;">
 <h2>Database Operations</h2>
 </div>
 <div class="container row pb-5">
   <div class="col-md-5">
     <h3>Database Name:Mike and sons</h3>
   </div>
   <div class="col-md-5">
     <form class="" action="" method="post">
       <button class="w3-border-red w3-white w3-round-large p-2" type="submit" name="Backup">Backup database</button>
       <button class="w3-border-red w3-white w3-round-large p-2 pb-5" type="submit" name="readfile">View Backups</button>

     </form>
   </div>
 </div>
 <?php
  backupTable();
  listBackups();
  ?>


<script type="text/javascript" src="style.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
