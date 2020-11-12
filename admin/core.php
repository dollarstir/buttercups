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

?>