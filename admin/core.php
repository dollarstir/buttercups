<?php

function ft(){
    echo ' <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">'.date("Y").' &copy; Buttercups Tours</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="dollarstir.com" target="_blank">Dollarsoft</a></span>
      <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
  </footer>';
}


// functions for Adding 

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
        <td><button title="Edit" type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="bx bx-pencil"></i></button>   <button id="'.$row['id'].'"  title="Delete" type="button" class="btn btn-icon btn-light-danger mr-1 mb-1 btndel">
        <i class="bx bx-trash"></i></button></td>
    </tr>';
        # code...
    }
}

?>