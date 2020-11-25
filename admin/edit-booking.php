<?php


include 'db.php';
$id = $_GET['id'];
$days = $_GET['days'];

$date      = date("Y/m/d");
$expdate   = date('Y/m/d', strtotime('+'.$days.' days'));

$up = mysqli_query($conn,"UPDATE booking set  status ='Active',startdate='$date', enddate='$expdate' WHERE id='$id' ");

echo '<script>
    window.location="view-booking.php";
</script>';

?>