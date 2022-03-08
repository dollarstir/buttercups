<?php

function ft(){
    echo ' <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">'.date("Y").' &copy; Buttercups Tours</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="dollarstir.com" target="_blank">Dollarsoft</a></span>
      <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
  </footer>';
}


// functions for Adding  activity

function  addactivity($title,$price,$desco,$dd){
    include 'db.php';
    $fileinfo = PATHINFO($_FILES['image']['name']);
    $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
    if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
        $pic =  $newfilename;
        $ins = mysqli_query($conn,"INSERT INTO activities (title,price,description,pic,dateadded) VALUES('$title','$price','$desco','$pic','$dd')");
        if ($ins) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            Activity added successfully
            </div>';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
        Failed to upload image  
        </div>';

    }
   
}

// Displaying tour service admin side
function activities(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM activities");

    while ($row=mysqli_fetch_array($sel)) {

        echo '<tr>
        <td>'.$row['title'].'</td>
        <td>'.$row['price'].'</td>
        <td>'.$row['description'].'</td>
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td>'.$row['dateadded'].'</td>
        <td><a  href ="edit-activity.php?id='.$row['id'].'" title="Edit"  class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="bx bx-pencil"></i></a>   <button id="'.$row['id'].'"  title="Delete" type="button" class="btn btn-icon btn-light-danger mr-1 mb-1 btndel">
        <i class="bx bx-trash"></i></button></td>
    </tr>';
        # code...
    }
}

// updating tour service 

function updateactivity($id,$title,$price,$desco,$oldpic,$dd){

    include 'db.php';

    if(empty($_FILES['image']['name'])){

        $pic = $oldpic;
        $Upt = mysqli_query($conn,"UPDATE activities set title ='$title',price='$price',description='$desco',pic='$pic' WHERE id='$id'");
        if ($Upt) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            Activity updated successfully
            </div>
            <script>
            setTimeout(() => {
                location.reload(true);
            }, 5000);
            </script>
            ';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }

    }
    else {

            $fileinfo = PATHINFO($_FILES['image']['name']);
            $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
            if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
                $pic =  $newfilename;
                $Upt = mysqli_query($conn,"UPDATE activities set title ='$title',price='$price',description='$desco',pic='$pic' WHERE id='$id'");
                if ($Upt) {
                    echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
                    Activity added successfully
                    </div>
                    
                    
                    <script>
                    setTimeout(() => {
                        location.reload(true);
                    }, 5000);
                    </script>
                    ';
                    # code...
                }
                else{

                    echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Failed to update 
                    </div>';
                }
            }
            else
            {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Failed to update image  
                </div>';

            }
        
    }
}



// adding tour services

function addtourservice($title,$price,$desco,$dd){

    include 'db.php';
    $fileinfo = PATHINFO($_FILES['image']['name']);
    $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
    if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
        $pic =  $newfilename;
        $ins = mysqli_query($conn,"INSERT INTO tour (title,price,description,pic,dateadded) VALUES('$title','$price','$desco','$pic','$dd')");
        if ($ins) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            service added successfully
            </div>';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
        Failed to upload image  
        </div>';

    }

}

// Displaying Tour Services

function tours(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM tour");

    while ($row=mysqli_fetch_array($sel)) {

        echo '<tr>
        <td>'.$row['title'].'</td>
        <td>'.$row['price'].'</td>
        <td>'.$row['description'].'</td>
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td>'.$row['dateadded'].'</td>
        <td><a  href ="edit-tour.php?id='.$row['id'].'" title="Edit"  class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="bx bx-pencil"></i></a>   <button id="'.$row['id'].'"  title="Delete" type="button" class="btn btn-icon btn-light-danger mr-1 mb-1 btndeltour">
        <i class="bx bx-trash"></i></button></td>
    </tr>';
        # code...
    }
}


// Updating Tour Services

function updatetour($id,$title,$price,$desco,$oldpic,$dd){

    include 'db.php';

    if(empty($_FILES['image']['name'])){

        $pic = $oldpic;
        $Upt = mysqli_query($conn,"UPDATE tour set title ='$title',price='$price',description='$desco',pic='$pic' WHERE id='$id'");
        if ($Upt) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            Service updated successfully
            </div>
            <script>
            setTimeout(() => {
                location.reload(true);
            }, 5000);
            </script>
            ';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }

    }
    else {

            $fileinfo = PATHINFO($_FILES['image']['name']);
            $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
            if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
                $pic =  $newfilename;
                $Upt = mysqli_query($conn,"UPDATE tour set title ='$title',price='$price',description='$desco',pic='$pic' WHERE id='$id'");
                if ($Upt) {
                    echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
                    Service added successfully
                    </div>
                    
                    
                    <script>
                    setTimeout(() => {
                        location.reload(true);
                    }, 5000);
                    </script>
                    ';
                    # code...
                }
                else{

                    echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Failed to update 
                    </div>';
                }
            }
            else
            {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Failed to update image  
                </div>';

            }
        
    }
}


function addaccomodation($title,$price,$desco,$dd,$ltype){

    include 'db.php';
    $fileinfo = PATHINFO($_FILES['image']['name']);
    $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
    if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
        $pic =  $newfilename;
        $ins = mysqli_query($conn,"INSERT INTO acomo (title,price,description,pic,dateadded,ltype) VALUES('$title','$price','$desco','$pic','$dd','$ltype')");
        if ($ins) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            Accomodation added successfully
            </div>';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
        Failed to upload image  
        </div>';

    }

}

// Display Accomodation

function Accomodations(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM acomo");

    while ($row=mysqli_fetch_array($sel)) {

        echo '<tr>
        <td>'.$row['title'].'</td>
        <td>'.$row['price'].'</td>
        <td>'.$row['description'].'</td>
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td>'.$row['ltype'].'</td>
        <td>'.$row['dateadded'].'</td>
        <td><a  href ="edit-accomodation.php?id='.$row['id'].'" title="Edit"  class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="bx bx-pencil"></i></a>   <button id="'.$row['id'].'"  title="Delete" type="button" class="btn btn-icon btn-light-danger mr-1 mb-1 btndelacomo">
        <i class="bx bx-trash"></i></button></td>
    </tr>';
        # code...
    }
}



// updating Accomodaation


function updateaccomodation($id,$title,$price,$desco,$oldpic,$dd,$ltype){

    include 'db.php';

    if(empty($_FILES['image']['name'])){

        $pic = $oldpic;
        $Upt = mysqli_query($conn,"UPDATE acomo set title ='$title',price='$price',description='$desco',pic='$pic',ltype='$ltype' WHERE id='$id'");
        if ($Upt) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            Accomodation updated successfully
            </div>
            <script>
            setTimeout(() => {
                location.reload(true);
            }, 5000);
            </script>
            ';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }

    }
    else {

            $fileinfo = PATHINFO($_FILES['image']['name']);
            $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
            if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
                $pic =  $newfilename;
                $Upt = mysqli_query($conn,"UPDATE acomo set title ='$title',price='$price',description='$desco',pic='$pic',ltype='$ltype' WHERE id='$id'");
                if ($Upt) {
                    echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
                    Accomodation added successfully
                    </div>
                    
                    
                    <script>
                    setTimeout(() => {
                        location.reload(true);
                    }, 5000);
                    </script>
                    ';
                    # code...
                }
                else{

                    echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Failed to update 
                    </div>';
                }
            }
            else
            {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Failed to update image  
                </div>';

            }
        
    }
}

// Adding Location

function  Addlocation($title){

    $ref = "faci".rand(111111111,999999999);

    include 'db.php';
    $fileinfo = PATHINFO($_FILES['image']['name']);
    $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];

    $targetDir = "../upload/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['mpics']['name']); 

    foreach($_FILES['mpics']['name'] as $key=>$val){ 
        // File upload path 
        $fileName = basename($_FILES['mpics']['name'][$key]); 
        $targetFilePath = $targetDir . $fileName; 
         
        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["mpics"]["tmp_name"][$key], $targetFilePath)){ 
                // Image db insert sql 
                $insertValuesSQL .= "('".$fileName."','$ref'),"; 
            }else{ 
                $errorUpload .= $_FILES['mpics']['name'][$key].' | '; 
            } 
        }else{ 
            $errorUploadType .= $_FILES['mpics']['name'][$key].' | '; 
        } 
    } 

    $insertValuesSQL = trim($insertValuesSQL, ','); 

    if(move_uploaded_file($_FILES['image']['tmp_name'],'../upload/'.$newfilename)){
        $pic =  $newfilename;
        $dd = date("jS F, Y");
        $ins = mysqli_query($conn,"INSERT INTO location (title,pic,ref,dateadded) VALUES('$title','$pic','$ref','$dd')");
        $insert = mysqli_query($conn,"INSERT INTO locpics (pic,ref) VALUES $insertValuesSQL");
        if ($ins &&  $insert) {
            echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
            Accomodation added successfully
            </div>';
            # code...
        }
        else{

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            error 
            </div>';
        }
    }
    else
    {
        echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
        Failed to upload image  
        </div>';

    }

}

function Locations(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM location");

    while ($row=mysqli_fetch_array($sel)) {

        echo '<tr>
        <td>'.$row['title'].'</td>
        
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td>'.$row['dateadded'].'</td>
        <td>  <button id="'.$row['id'].'"  title="Delete" type="button" class="btn btn-icon btn-light-danger mr-1 mb-1 btndelloc">
        <i class="bx bx-trash"></i></button></td>
    </tr>';
        # code...
    }
}



// Displaying All Bookings

function Bookings(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM booking WHERE status ='pending' ");

    while ($row=mysqli_fetch_array($sel)) {
        

        echo '<tr>
        <td>'.$row['myref'].'</td>
        <td>'.$row['fname'].' '.$row['lname'].'</td>
        <td>'.$row['days'].'</td>
        <td>'.$row['type'].'</td>
        <td>'.$row['title'].'</td>
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td>'.$row['status'].'</td>
        <td><a  href ="edit-booking.php?id='.$row['id'].'&days='.$row['days'].'" title="Start"  class="btn btn-icon rounded-circle btn-outline-success mr-1 mb-1"><i class="bx bx-check bx-spin-hover"></i>Start</a>  <a id="'.$row['id'].'" href="booking-detail.php?id='.$row['id'].'&status=pending"  title="View"  class="btn btn-icon btn-light-primary   mr-1 mb-1 ">
        <i class="bx bx-show bx-tada-hover"></i>View</a></td>
    </tr>';
        # code...
    }
}

// Active Booking
function ActiveBookings(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM booking");

    while ($row=mysqli_fetch_array($sel)) {
        if(strtotime(date("Y/m/d")) <= strtotime($row['enddate'])){

            $status = "Active";
            echo '<tr>
        <td>'.$row['myref'].'</td>
        <td>'.$row['fname'].' '.$row['lname'].'</td>
        <td>'.$row['days'].'</td>
        <td>'.$row['type'].'</td>
        <td>'.$row['title'].'</td>
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td><span class="badge badge-light-success">'.$status.'</span></td>
        <td> <a id="'.$row['id'].'" href="booking-detail.php?id='.$row['id'].'&status='.$status.'"  title="View"  class="btn btn-icon btn-light-primary   mr-1 mb-1 ">
        <i class="bx bx-show bx-tada-hover"></i>View</a></td>
    </tr>';
        }


        
        # code...
    }
}


// Expired Booking
function ExpiredBookings(){
    include 'db.php';
    $sel = mysqli_query($conn,"SELECT * FROM booking WHERE status='Active' ");

    while ($row=mysqli_fetch_array($sel)) {
        if(strtotime(date("Y/m/d")) > strtotime($row['enddate'])){

            $status = "Expired";
            echo '<tr>
        <td>'.$row['myref'].'</td>
        <td>'.$row['fname'].' '.$row['lname'].'</td>
        <td>'.$row['days'].'</td>
        <td>'.$row['type'].'</td>
        <td>'.$row['title'].'</td>
        <td><img src="../upload/'.$row['pic'].'" style="width:150px;height:150px;" alt=""/></td>
        <td><span class="badge badge-light-danger">'.$status.'</span></td>
        <td> <a id="'.$row['id'].'" href="booking-detail.php?id='.$row['id'].'&status='.$status.'"  title="View"  class="btn btn-icon btn-light-primary   mr-1 mb-1 ">
        <i class="bx bx-show bx-tada-hover"></i>View</a></td>
    </tr>';
        }


        
        # code...
    }
}


function Adminlogin($email,$password){
    include 'db.php';
    $log = mysqli_query($conn,"SELECT * FROM admin  WHERE email='$email' AND  password='$password' ");
    if($row=mysqli_fetch_array($log)){
        session_start();
        $myid =$row['id'];
        $_SESSION['id']=$myid;
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];

        echo '<div class="alert alert-success mb-2" role="alert" id="myalert">
                login successful   
                </div>
                
                <script>
                setTimeout(() => {

                    window.location= "home.php";
                    
                }, 5000);
                </script>
                ';

    }
    else{

        echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Wrong credentials   
                </div>';
    }
}


?>