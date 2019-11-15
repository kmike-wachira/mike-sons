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


<nav class="navbar navbar-expand-md bg-light navbar-dark justify-content-right" id="navbar">
  <a class="navbar-brand" href="#" id="logo">Mike and Sons</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tender.html">Tenders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobs.html">Jobs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.html">Register</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid" style="margin-top:250px">

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
      <img src="img/image3.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
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

<div class="container-fluid w3-container pt-5 pb-5">
  <div class="row ">
    <div class="col-md-3 col-sm-12">
      <div class="w3-card-4" style="width:100%">
        <img src="img/image1.jpg" alt="Alps" style="width:100%">
          <div class="w3-container w3-center pb-3">
            <p>Do you have Lots of maize stock at you place wondering where is  the market wonder no more for we are here for you</p>
            <p>Wanted in tonnes <span class="w3-badge w3-red">8</span></p>
            <button class="w3-button w3-block w3-cyan pb-3" onclick="document.getElementById('id01').style.display='block'" style="width:80%">View More and make order</button>

            <!-- My Modal -->

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright">&times;</span>
                  <h2>Maize tender</h2>
                </header>
                <div class="w3-container">
                  <p>How much maize Do you have in your gallery.Would you like to sell some via a tender .Please Do so for your self</p>
                  <p>Some text..</p>
                </div>
                <footer class="w3-container w3-teal">
                  <p>Modal Footer</p>
                </footer>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- to be removed -->
    <div class="col-md-3 col-sm-12">
      <div class="w3-card-4" style="width:100%">
        <img src="img/image1.jpg" alt="Alps" style="width:100%">
          <div class="w3-container w3-center pb-3">
            <p>Do you have Lots of maize stock at you place wondering where is  the market wonder no more for we are here for you</p>
            <p>Wanted in tonnes <span class="w3-badge w3-red">8</span></p>
            <button class="w3-button w3-block w3-cyan pb-3" onclick="document.getElementById('id01').style.display='block'" style="width:80%">View More and make order</button>

            <!-- My Modal -->

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright">&times;</span>
                  <h2>Maize tender</h2>
                </header>
                <div class="w3-container">
                  <p>How much maize Do you have in your gallery.Would you like to sell some via a tender .Please Do so for your self</p>
                  <p>Some text..</p>
                </div>
                <footer class="w3-container w3-teal">
                  <p>Modal Footer</p>
                </footer>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <div class="w3-card-4" style="width:100%">
        <img src="img/image1.jpg" alt="Alps" style="width:100%">
          <div class="w3-container w3-center pb-3">
            <p>Do you have Lots of maize stock at you place wondering where is  the market wonder no more for we are here for you</p>
            <p>Wanted in tonnes <span class="w3-badge w3-red">8</span></p>
            <button class="w3-button w3-block w3-cyan pb-3" onclick="document.getElementById('id01').style.display='block'" style="width:80%">View More and make order</button>

            <!-- My Modal -->

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright">&times;</span>
                  <h2>Maize tender</h2>
                </header>
                <div class="w3-container">
                  <p>How much maize Do you have in your gallery.Would you like to sell some via a tender .Please Do so for your self</p>
                  <p>Some text..</p>
                </div>
                <footer class="w3-container w3-teal">
                  <p>Modal Footer</p>
                </footer>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <div class="w3-card-4" style="width:100%">
        <img src="img/image1.jpg" alt="Alps" style="width:100%">
          <div class="w3-container w3-center pb-3">
            <p>Do you have Lots of maize stock at you place wondering where is  the market wonder no more for we are here for you</p>
            <p>Wanted in tonnes <span class="w3-badge w3-red">8</span></p>
            <button class="w3-button w3-block w3-cyan pb-3" onclick="document.getElementById('id01').style.display='block'" style="width:80%">View More and make order</button>

            <!-- My Modal -->

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright">&times;</span>
                  <h2>Maize tender</h2>
                </header>
                <div class="w3-container">
                  <p>How much maize Do you have in your gallery.Would you like to sell some via a tender .Please Do so for your self</p>
                  <p>Some text..</p>
                </div>
                <footer class="w3-container w3-teal">
                  <p>Modal Footer</p>
                </footer>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 pt-3">
      <div class="w3-card-4" style="width:100%">
        <img src="img/image1.jpg" alt="Alps" style="width:100%">
          <div class="w3-container w3-center pb-3">
            <p>Do you have Lots of maize stock at you place wondering where is  the market wonder no more for we are here for you</p>
            <p>Wanted in tonnes <span class="w3-badge w3-red">8</span></p>
            <button class="w3-button w3-block w3-cyan pb-3" onclick="document.getElementById('id01').style.display='block'" style="width:80%">View More and make order</button>

            <!-- My Modal -->

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content w3-card-4">
                <header class="w3-container w3-teal">
                  <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright">&times;</span>
                  <h2>Maize tender</h2>
                </header>
                <div class="w3-container">
                  <p>How much maize Do you have in your gallery.Would you like to sell some via a tender .Please Do so for your self</p>
                  <p>Some text..</p>
                </div>
                <footer class="w3-container w3-teal">
                  <p>Modal Footer</p>
                </footer>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- for looping thro -->
  </div>

</div>


<script type="text/javascript" src="style.js">

</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
