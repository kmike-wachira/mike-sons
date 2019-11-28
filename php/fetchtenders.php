<?php
include 'connection.php';
$conn=connect();


$tender ="SELECT  * FROM `tenders`";
$resultset = $conn->query($tender);
if ($resultset->num_rows > 0) {
   echo '<div class="container-fluid w3-container pt-5 pb-5">
     <div class="row ">';
  while($row = $resultset->fetch_assoc()) {
  $tenderdesc=$row['tender_description'];
  $tenderid=$row['id'];
  $tendertitle=$row['tender_name'];
  // $vacancies=$row['vacancies'];
  $price=$row['price'];
  $category=$row['category'];
  $date=$row['due_date'];
  $organisation=$row['org'];
  if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    addTender($id,$tenderid);
  }

  echo '
  <div class="col-md-3 col-sm-12">
    <div class="w3-card-4" style="width:100%">
      <img src="img/image1.jpg" alt="Alps" style="width:100%">
        <div class="w3-container w3-center pb-3">
          <h4>'.$tendertitle.'</h4>
          <br>
          <p> '.$tenderdesc.'</p>
          <!-- <span class="w3-badge w3-red">8</span> -->
          <p>Category : '.$category.'</p>
          <button class="w3-button w3-block w3-cyan pb-3" data-toggle="modal" data-target="#id'.$tenderid.'" style="width:80%">View More and make order</button>
        </div>
    </div>
  </div>

  <div class="modal fade w3-center" id="id'.$tenderid.'">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header w3-center bg-grey">
          <h4 class="modal-title">'.$tendertitle.'</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
          <div class="modal-body">
          <form class="" action="" method="post">
          <h4> '.$tendertitle.'</h4><br>
          <p>'.$tenderdesc.'</p><br>
          <p>Price :'.$price.'</p><br>
          <p>Organisation :' .$organisation.'</p><br>
          <p> Deadline :'.$date.'</p><br>
          <div class="w3-center">
            <button type="submit" class="btn btn-succes w3-round-large w3-border-red w3-center " name="'.$tenderid.'">Take Tender</button>
          </div>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  ';

  }
  echo '</div>
</div>';

} else {
  echo "no available tenders";
}

?>
