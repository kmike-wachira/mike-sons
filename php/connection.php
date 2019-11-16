<?php
function connect(){
$servername = "localhost";
$username = "root";
$spassword = "";
$dbname = "mike-sons";

// Create connection
$conn = new mysqli($servername, $username, $spassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected succesfully";
return $conn;
}
// add tender
function uploadtender(){
  $conn=connect();

  if(isset($_POST['addtender'])){
    $tn=$_POST['title'];
    $td=$_POST['TDesc'];
    $category=$_POST['Category'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $uploadtender = "INSERT INTO `tenders`(`tender_name`, `tender_description`, `category`, `due_date`, `price`, `org`, `state`)
                  VALUES ('$tn','$td','$category','$date','$price','1','0')";

            if ($conn->query($uploadtender) === TRUE) {
              // echo "Tender Uploaded successfuly";
            } else {
              echo "Error: " . $uploadtender . "<br>" . $conn->error;
            }
          }
        }
// Register
function register(){
  $conn=connect();
  if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pswd'];
    $register = "INSERT INTO `Users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

    if ($conn->query($register) === TRUE) {
        header('Location:login.php');
        } else {
        echo "Error: " . $register . "<br>" . $conn->error;
    }
  }
}
// add Job
function addjob(){
  if(isset($_POST['addjob'])){
    $jobtitle=$_POST['jobtitle'];
    $jobdesc=$_POST['jDesc'];
    $category=$_POST['Category'];
    $salary=$_POST['Salary'];
    $vacancies=$_POST['Vacancies'];
    $date=$_POST['date'];

$conn=connect();
$addjob = "INSERT INTO `Jobs`(`job-title`, `job-desc`, `vacancies`, `salary`, `category`, `due-date`, `organisation`)
VALUES ('$jobtitle','$jobdesc','$vacancies','$salary','$category','$date','1')";
if ($conn->query($addjob) === TRUE) {

} else {
    echo "Error: " . $addjob . "<br>" . $conn->error;
}
}
}

// Login

function Login(){
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['pswd'];
  $conn=connect();
  $login ="SELECT * FROM `Users` WHERE `email`='$email' AND `password`= '$password' ";
  $resultset = $conn->query($login);

if ($resultset->num_rows > 0) {
    // output data of each row
    while($row = $resultset->fetch_assoc()) {
       header('Location:index.php');
    }
} else {
    echo "User Not found";
}
}
}

?>
