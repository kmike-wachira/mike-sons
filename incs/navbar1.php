<?php
session_start();
 ?>

<?php if(isset( $_SESSION['username'])){
echo '
<nav class="navbar navbar-expand-md bg-light   fixed-top p-4 justify-content-right" id="nav" >
  <a class="navbar-brand" href="index.php" id="">Mike and Sons</a>
  <button class="navbar-toggler w3-brown" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="glyphicon glyphicon-plus "> +</span>
  </button>
  <div class="collapse w3-animate-left navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link navlink" href="homecart.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navlink" href="tender.php">Tenders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navlink " href="jobs.php">Jobs </a>
      </li>
      <li class="nav-item">
        <a class="nav-link navlink" href="uploadTender.php">Add Tender</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navlink" href="addJob.php">Hire</a>
      </li>
      <li class="nav-item">
      <a class="nav-link navlink" href="mycart.php">Cart</a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link navlink dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">';
            echo $_SESSION['username'] ;
            echo'
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="Logout.php">Logout</a><br>
            </div>
        </li>

    </ul>
  </div>
</nav>
';
}else {
  echo '
  <nav class="navbar navbar-expand-md  bg-light fixed-top p-4 justify-content-right" >
    <a class="navbar-brand" href="index.php" id="logo">Mike and Sons</a>
    <button class="navbar-toggler w3-brown" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="glyphicon glyphicon-plus"> +</span>
    </button>
    <div class="collapse w3-animate-left navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link navlink" href="homecart.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navlink" href="tender.php">Tenders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navlink" href="jobs.php">Jobs </a>
        </li>
        <li class="nav-item">
          <a class="nav-link navlink" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navlink" href="register.php">Register</a>
        </li>
      </ul>
    </div>
  </nav>
  ';
} ?>
