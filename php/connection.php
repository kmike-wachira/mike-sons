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
function getPersonna($id){
  $conn=connect();
  $login ="SELECT `id`, `name`, `email`, `password` FROM `Users` WHERE `id`='$id'";
  $resultset = $conn->query($login);
if ($resultset->num_rows > 0) {
    while($row = $resultset->fetch_assoc()) {
     $name=$row['name'];
    }
} else {
    echo "User Not found";
}
return $name;
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
    $org=$_SESSION['username'];
    $uploadtender = "INSERT INTO `tenders`(`tender_name`, `tender_description`, `category`, `due_date`, `price`, `org`, `state`)
                  VALUES ('$tn','$td','$category','$date','$price','$org','0')";

            if ($conn->query($uploadtender) === TRUE) {
              // echo "Tender Uploaded successfuly";
            } else {
              echo "Error: " . $uploadtender . "<br>" . $conn->error;
            }
          }
        }
        function updateTenders($idn){
          $conn=connect();
          $approve="approve".$idn;
          $disapprove="Disapprove".$idn;

          if(isset($_POST[$approve])){
          $sql = "UPDATE `Apply tender` SET `state`='1' WHERE `id`='$idn' ";
          if ($conn->query($sql) === TRUE) {
            // echo "Record updated successfully";
          } else {
              echo "Error updating record: " . $conn->error;
              }
            }else if(isset($_POST[$disapprove])){
              $sql = "UPDATE `Apply tender` SET `state`= '2' WHERE `id`='$idn' ";
                if ($conn->query($sql) === TRUE) {
                // echo "Record updated successfully";
                }else {
                    echo "Error updating record: " . $conn->error;
                }
                }
            }

            function updateJobs($idn){
              $conn=connect();
              $disapprove="Disapprove".$idn;
              $approve="approve".$idn;
              if(isset($_POST[$approve])){
              $sql = "UPDATE `Apply job` SET `state`= '1' WHERE `id`='$idn' ";
              if ($conn->query($sql) === TRUE) {
                // echo "Record updated successfully";
              } else {
                  echo "Error updating record: " . $conn->error;
                  }
                } else if(isset($_POST[$disapprove])){
                    $sql = "UPDATE `Apply job` SET `state`= '2' WHERE `id`='$idn' ";
                    if ($conn->query($sql) === TRUE) {
                      // echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
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
  $org=$_SESSION['username'];
$conn=connect();
$addjob = "INSERT INTO `Jobs`(`job-title`, `job-desc`, `vacancies`, `salary`, `category`, `due-date`, `organisation`)
VALUES ('$jobtitle','$jobdesc','$vacancies','$salary','$category','$date','$org','0')";
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
       $_SESSION['id']=$row['id'];
       $_SESSION['username']=$row['email'];
       header('Location:index.php');
    }
} else {
    echo "User Not found";
}
}
}

// apply tender
function addTender($user,$tenderid){
  if(isset($_POST[$tenderid])){
    $conn=connect();
    $tender ="INSERT INTO `Apply tender`(`tenderid`, `personnaid`, `state`) VALUES ('$tenderid','$user','0')";
    if ($conn->query($tender) === TRUE) {

    } else {
        echo "Error: " . $tenderid. "<br>" . $conn->error;
    }

}
}

// apply job
function applyJob($user,$jobid){
  if(isset($_POST[$jobid])){
    $conn=connect();
    $job ="INSERT INTO`Apply job`(`jobid`, `personaid`, `state`) VALUES ('$jobid','$user','0')";
    if ($conn->query($job) === TRUE) {

    } else {
        echo "Error: " . $jobid. "<br>" . $conn->error;
    }

}
}
?>
