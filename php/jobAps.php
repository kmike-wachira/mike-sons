<?php
// include 'connection.php';
// include 'connection.php';
  $connect2=connect();
  $userid=$_SESSION['id'];
  $myjob ="SELECT `id`, `jobid`, `personaid`, `state` FROM `Apply job` WHERE `personaid`='$userid'";
  $resultset = $connect2->query($myjob);
if ($resultset->num_rows > 0) {
    // output data of each row
    while($row = $resultset->fetch_assoc()) {
     // read from jobs
     $jobid=$row['jobid'];
     $tvalue ="SELECT `id`, `job-title`, `job-desc`, `vacancies`, `salary`, `category`, `due-date`, `organisation`,`state` FROM `Jobs` WHERE `id`='$jobid'";
     $tset = $connect2->query($tvalue);
   if ($tset->num_rows > 0) {
            // output data of each row
       while($row = $tset->fetch_assoc()) {
         $jobN=$row['job-title'];
         $joborg=$row['organisation'];
         $tendecate=$row['category'];
         $jobstate=$row['state'];
         $jobprice=$row['salary'];
      echo'   <div class="container p-3 mt-3 bg-light" >
           <div class="row mr-2 ml-2 well">
              <div class="col-sm-12 col-md-5">
              <h3>Title: '.$jobN.'</h3>
              <h5>Owners: '.$joborg.'</h5>
               <p>Category '.$tendecate.'</p>
              </div>
              <div class="col-sm-12 col-md-3">
                <h4>Status: '.$jobstate.'</h4>
              </div>
              <div class="col-sm-12 col-md-4">
              <h3>Price: '.$jobprice.'</h3>
              </div>
             </div>
         </div>';

       }
   } else {
       echo "User Not found";
   }

     // end read

    }
} else {
    echo "User Not found";
}

// $connect1.close()



 ?>
