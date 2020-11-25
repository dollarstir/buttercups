<?php
include 'db.php';

$id  = $_GET['myid'];
$sl = mysqli_query($conn,"SELECT * FROM location WHERE id= '$id' ");
$dl = mysqli_query($conn,"DELETE  FROM location WHERE  id= '$id'");
$row= mysqli_fetch_array($sl);
$ref = $row['ref'];
$del1 = mysqli_query($conn,"DELETE FROM locpics WHERE ref ='$ref'");

if ($dl && $del1){
    echo "delected successfully";
}
else{
    echo 'failed to delete';
}


?>