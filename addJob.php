<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="w3.css">
</head>
<body>
  <?php include 'incs/navbar1.php';
  include 'php/connection.php';
  addjob(); ?>
<div style="margin-top:80px;">

  <div class=" container center">
    <div class="row">

      <div class="col-md-2"></div>
<div class="col-md-8 col-sm-12">
  <div class=" w3-card-4" style="width:100%">
    <header class="w3-container w3-center w3-light-grey">
      <h3>Hire</h3>
      </header>
      <div class="w3-container">
        <form class="w3-container" action="" method="post">

          <label class="w3-label">Job Title</label>
          <input class="w3-input" name="jobtitle" type="text" required>

          <label class="w3-label">Job Description</label><br>
          <textarea class="w3-input" name="jDesc" rows="4" cols="40" required></textarea>

          <p>
              <label class="w3-label">Job Category</label><br>
            <input class="w3-radio" type="radio" name="Category" value="permanent">
            <label class="w3-validate">Permanent</label></p>

            <p>
              <input class="w3-radio" type="radio" name="Category" value="temporary">
              <label class="w3-validate">Temporary</label></p>

              <label class="w3-label">Vacancies</label>
              <input class="w3-input" type="number" name="Vacancies" min="1" default="1" required>

          <label class="w3-label">Salary</label>
          <input class="w3-input" type="number" name="Salary" min="1000" default="1000" required>

           <label class="w3-label">Due date</label>
          <input class="w3-input" type="date" name="date" min="10" required>
          <div class="container w3-center p-3">
            <button type="submit" class="btn btn-succes w3-round-large w3-border-red w3-center " name="addjob">Hire</button>

          </div>

        </form>
      </div>

</div>
</div>

      <div class="col-md-2"></div>



    </div>

  </div>
</div>

<script type="text/javascript" src="style.js">

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
