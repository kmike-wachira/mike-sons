<?php
include 'connection.php';
// include 'connection.php';
  $connect1=connect();
  $userid=$_SESSION['id'];
  $mytender ="SELECT `id`, `tenderid`, `personnaid`, `state` FROM `Apply tender` WHERE `personnaid`='$userid'";
  $resultset = $connect1->query($mytender);
if ($resultset->num_rows > 0) {
    // output data of each row
    while($row = $resultset->fetch_assoc()) {
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
         $tenderstate=$row['state'];
         $tenderprice=$row['price'];
      echo'   <div class="container p-3 mt-3 bg-light" >
           <div class="row mr-2 ml-2 well">
              <div class="col-sm-12 col-md-5">
              <h3>Title: '.$tenderN.'</h3>
              <h5>Owners: '.$tenderorg.'</h5>
               <p>Category '.$tendecate.'</p>
              </div>
              <div class="col-sm-12 col-md-3">
                <h4>Status: '.$tenderstate.'</h4>
              </div>
              <div class="col-sm-12 col-md-4">
              <h3>Price: '.$tenderprice.'</h3>

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
