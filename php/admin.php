<?php
// include 'connection.php';
// include 'connection.php';
function showJobs(){
  $connect2=connect();
  $userid=$_SESSION['id'];
  $myjob ="SELECT `id`, `jobid`, `personaid`, `state` FROM `Apply job`";
  $resultset = $connect2->query($myjob);
if ($resultset->num_rows > 0) {
    // output data of each row
    while($row = $resultset->fetch_assoc()) {
     // read from jobs
     $jobstate=$row['state'];
      $appid=$row['id'];
     $userid=$row['personaid'];
     $name=getPersonna($userid);
     $jobid=$row['jobid'];
     $tvalue ="SELECT `id`, `job-title`, `job-desc`, `vacancies`, `salary`, `category`, `due-date`, `organisation`,`state` FROM `Jobs` WHERE `id`='$jobid'";
     $tset = $connect2->query($tvalue);
   if ($tset->num_rows > 0) {
            // output data of each row
       while($row = $tset->fetch_assoc()) {
         $jobN=$row['job-title'];
         $joborg=$row['organisation'];
         $tendecate=$row['category'];
         $jobprice=$row['salary'];
         updateJobs($appid);
      echo'<div class="container p-3 mt-3 bg-light" >
           <div class="row mr-2 ml-2 well">
              <div class="col-sm-12 col-md-5">
              <h3>Title: '.$jobN.'</h3>
              <h5>Owners: '.$joborg.'</h5>
              <h5>Tender Customer: '.$name.'</h5>
               <p>Category '.$tendecate.'</p>
              </div>
              <div class="col-sm-12 col-md-3">
                <h4>Status: '.$jobstate.'</h4>
              </div>
              <div class="col-sm-12 col-md-4">
              <h3>Price: '.$jobprice.'</h3>
              <form class="form" action="" method="post">
                <button type="submit"class="btn btn-success" name="approve'.$appid.'"> Approve</button>
                <button type="submit"class="btn btn-danger" name="Disapprove'.$appid.'"> Disapprove</button>
              </form>
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
}

function showTender(){
  include 'connection.php';
  // include 'connection.php';
    $connect1=connect();
    $mytender ="SELECT `id`, `tenderid`, `personnaid`, `state` FROM `Apply tender`";
    $resultset = $connect1->query($mytender);
  if ($resultset->num_rows > 0) {
      // output data of each row
      while($row = $resultset->fetch_assoc()) {
        $appid=$row['id'];
        $userid=$row['personnaid'];
        $name=getPersonna($userid);
        $tenderstate=$row['state'];
       // read from tenders
       $tenderid=$row['tenderid'];
       $tvalue ="SELECT `id`, `tender_name`, `tender_description`, `category`, `due_date`, `price`, `org`, `state` FROM `tenders` WHERE `id`='$tenderid'";
       $tset = $connect1->query($tvalue);
     if ($tset->num_rows > 0) {
              // output data of each row
         while($row = $tset->fetch_assoc()) {
           $tenderN=$row['tender_name'];
           $tenderorg=$row['org'];
           $tendecate=$row['category'];
           $tenderprice=$row['price'];
           updateTenders($appid);
        echo'<div class="container p-3 mt-3 bg-light" >
             <div class="row mr-2 ml-2 well">
                <div class="col-sm-12 col-md-5">
                <h3>Title: '.$tenderN.'</h3>
                <h5>Owners: '.$tenderorg.'</h5>
                <h5>Tender Customer: '.$name.'</h5>
                 <p>Category '.$tendecate.'</p>
                </div>
                <div class="col-sm-12 col-md-3">
                  <h4>Status: '.$tenderstate.'</h4>
                </div>
                <div class="col-sm-12 col-md-4">
                <h3>Price: '.$tenderprice.'</h3>
                <form class="form" action="" method="post">
                  <button type="submit"class="btn btn-success" name="approve'.$appid.'"> Approve</button>
                  <button type="submit"class="btn btn-danger" name="Disapprove'.$appid.'"> Disapprove</button>
                </form>

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


}

// $connect1.close()



 ?>
