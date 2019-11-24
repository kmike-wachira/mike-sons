<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="w3.css">
</head>
<body>

  <?php
        include 'incs/navbar1.php';
        include 'php/connection.php';
        uploadtender();
  ?>
<div style="margin-top:110px;">
    <div class=" row">

      <div class="col-md-2"></div>
<div class="col-md-8">
  <div class=" w3-card-4 w3-margin" style="width:100%">
    <header class="w3-container w3-center w3-light-grey">
      <h3>Add A tender</h3>
      </header>
      <div class="w3-container">
        <form class="w3-container" action="" method="post">

          <label class="w3-label">Tender Name</label>
          <input class="w3-input" type="text" required name="title">

          <label class="w3-label">Tender Description</label>
          <textarea class="w3-input" name="TDesc" rows="4" cols="40" required></textarea>

          <p>
              <label class="w3-label">Tender Category</label><br>
            <input class="w3-radio" type="radio" name="Category" value="contract " >
            <label class="w3-validate">Contract</label></p>

            <p>
              <input class="w3-radio" type="radio" name="Category" value="product">
              <label class="w3-validate">Product</label></p>

          <label class="w3-label">Price</label>
          <input class="w3-input" name="price" type="number" min="10" required>

           <label class="w3-label">Due date</label>
          <input class="w3-input" name="date" type="date" required>
          <div class="container w3-center p-3">
            <button type="submit" class="btn btn-success w3-round-large w3-border-red w3-center " name="addtender"> Submit Tender</button>
          </div>
        </form>
      </div>
</div>
</div>
      <div class="col-md-2"></div>
    </div>
</div>

<script type="text/javascript" src="style.js">

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
