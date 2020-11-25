<?php

include 'admin/db.php';


extract($_POST);

$fileinfo=PATHINFO($_FILES["image"]["name"]);
    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
if(move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename)){
        $pic=$newFilename;     
        $dd = date("jS F, Y");

        $ins = mysqli_query($conn,"INSERT INTO booking(fname,lname,email,country,state,zip,address,arrival,departure,arrivaltime,departuretime,contact,days,sp,tt,type,title,myref,pic,dateadded,pstatus,status) values('$fname','$lname','$email','$country','$state','$zip','$address','$arrival','$departure','$arrivaltime','$departuretime','$contact','$days','$sp','$tt','$type','$title','$myref','$pic','$dd','paid','pending')");
        if ($ins){

            echo "sent";

        }

        else{
            echo $conn-> error;
        }
}

?>