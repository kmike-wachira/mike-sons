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
function dbtablesoper(){
// include 'connection.php';
$connw=connect();

  $sql = "SHOW TABLES";
  $resultsetq = $connw->query($sql);
  echo '<table class=" w3-centered w3-table-all w3-hoverable">
     <thead>
       <tr class="w3-light-grey">
         <th>Table Name</th>
         <th>Backup</th>
       </tr>
     </thead>';
  while ($rowa =$resultsetq->fetch_row()) {
    // backupTable($rowa[0]);
    echo '
     <tr>
      <form class="form" action="" method="post">
        <td class="w3-center">'.$rowa[0].'</td>
        <td class="w3-center"><button type="submit" class="btn w3-white w3-red w3-round-large" name='.$rowa[0].'>Backup</button> </td>
      </form>
    </tr>';
  }

}
function backupTable(){
  // $conn=connect();
  // $tn=`$tablename`;
    // $filename=$tablename.date("Y-m-d h:i:sa").".sql";
    // if(isset($_POST[$tablename])){
       if(isset($_POST["Backup"])){
          $mysqlDatabaseName ='mikesons';
          $mysqlUserName ='root';
          $mysqlPassword ='35287193';
          $mysqlHostName ='localhost';
          $mysqlExportPath ="backups/mikesons".date( "d-m-Y--h-i-s").".sql";

          //Please do not change the following points
          //Export of the database and output of the status
          $command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
          $output=array();
          exec($command,$output,$worked);
          switch($worked){
          case 0:
          echo 'The database <b>' .$mysqlDatabaseName .'</b> was successfully stored in the following path '.getcwd().'/' .$mysqlExportPath .'</b>';
          break;
          case 1:
          echo 'An error occurred when exporting <b>' .$mysqlDatabaseName .'</b> zu '.getcwd().'/' .$mysqlExportPath .'</b>';
          break;
          case 2:
          echo 'An export error has occurred, please check the following information: <br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
          break;
// }
}
}
}
   function listBackups(){
     $dir = "C:\/Apache24\/htdocs\/dev\/mike-sons\/backups\/";
     if(isset($_POST["readfile"])){
       $files=scandir($dir);
      	echo '<form class="p-5" method="post" action="">
        <select name="dbname" class="custom-select">Database to Restore';
      		foreach ($files as $file){
      			if ($file == "." || $file == "..") continue;
			         echo "<option>$file</option>
               ";
		           }
    echo '</select>
    <button class="w3-border-red w3-white w3-round-large p-2" type="submit" name="restore">restore</button>
    </form>';
    restoredb();
}
}
function restoredb(){
          if(isset($_POST["restore"])){
            $db=$_POST['dbname'];
            $mysqlDatabaseName ='mikesons';
            $mysqlUserName ='root';
            $mysqlPassword ='35287193';
            $mysqlHostName ='localhost';
            $mysqlImportFilename ='./backups/'.$db;

            //Please do not change the following points
            //Import of the database and output of the status
            $command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
              $output=array();
            exec($command,$output,$worked);
            switch($worked){
            case 0:
            // echo 'The data from the file <b>' .$mysqlImportFilename .'</b> were successfully imported into the database <b>' .$mysqlDatabaseName .'</b>';
            break;
            case 1:
            echo 'An error occurred during the import. Please check if the file is in the same folder as this script. Also check the following data again:<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>MySQL Import Dateiname:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
            break;
          }
        }
      }

      function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath){
          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
          $templine = '';
          $lines = file($filePath);
          $error = '';
          foreach ($lines as $line){
              if(substr($line, 0, 2) == '--' || $line == '') continue;
              $templine .= $line;
              if (substr(trim($line), -1, 1) == ';'){
                  if(!$db->query($templine)){
                      $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
                  }
                  $templine = '';
              }
          }
          return !empty($error)?$error:true;
      }

   //backup
   function backup()
   {
     if(isset($_POST["Backup"])){
       $dir = "C:\/Apache24\/htdocs\/dev\/mike-sons\/backups\/";
        global $dir;
      $params = array(
          'db_host'=> 'localhost',
          'db_uname' => 'root',
          'db_password' => '35287193',
          'db_to_backup' => 'mikesons',
          'db_backup_path' => $GLOBALS['dir'],
          'db_exclude_tables' => array('wp_comments','wp_w3tc_cdn_queue')
      );
      backup_mysql_database($params);
  }
   }



restoredb();

?>
