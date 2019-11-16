<?php
include 'connection.php';
$conn=connect();

$jobs ="SELECT * FROM `Jobs`";
$resultset = $conn->query($jobs);

if ($resultset->num_rows > 0) {

  while($row = $resultset->fetch_assoc()) {
  $jobdesc=$row['job-desc'];
  $jobid=$row['id'];
  $jobtitle=$row['job-title'];
  $vacancies=$row['vacancies'];
  $salary=$row['salary'];
  $category=$row['category'];
  $date=$row['due-date'];
  $organisation=$row['organisation'];
    echo '<div class="container pt-4">';
  echo ' <div class=" w3-card-6 p-4 bg-light text-dark d-flex row">
    <div class="col-md-6 col-sm-12">
      <h4>'.$jobtitle.'</h4>
      <p>'.$jobdesc.'</p>
    </div>
    <div class=" w3-center col-md-3 col-sm-12 pb-3">
      <span class="badge badge-pill p-3 badge-primary">'.$category.'</span>
    </div> <br>
    <div class="col-md-3 col-sm-12 w3-center">
      <button class=" btn btn-primary w3-round-large w-25 w3-shadow-grey"type="button" data-toggle="modal" data-target="#'.$jobtitle.$jobid.'" name="button"> Apply</button> <br>
      <button class="w3-button w3-right  w3-xlarge w3-circle w3-white w3-card-4"><i class="far fa-star"></i></button>
    </div>
  </div>
  </div>

  <!--Apply modal  -->
  <div class="modal fade" id="'.$jobtitle.$jobid.'">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">'.$jobtitle.'</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form class="" action="" method="post">
        <p> You want to apply for this '.$jobtitle. '  job .Click the apply button to apply and more details will be availed to your email once approved.
        it will take less than 1 hour to be reached out. </p><br>
        <div class="w3-center">
          <button type="submit" name="apply" class="w3-red w3-round-large btn w3-border-brown w3-border"> Apply</button>
          </div>


      </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </div>';
  }

} else {
  echo "no available jobs";
}

?>
