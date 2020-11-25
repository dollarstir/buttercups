<?php 
include 'core.php';

if(isset($_GET['dollar'])){
    // adding activity

    if($_GET['dollar']=="addactivity"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                activity name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for activity   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addactivity($title,$price,$desco,$dd);
        }
    }
// Deleting Activity
    if($_GET['dollar']=="deleteactivity"){

        $id = $_POST['id'];

       echo  $id;
    }
// Updating activity
    if($_GET['dollar']=="updateactivity"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");

        updateactivity($id,$title,$price,$desco,$oldpic,$dd);

    }


    if($_GET['dollar']=="addtour"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                service name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for service   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addtourservice($title,$price,$desco,$dd);
        }
    }

// update tour
    if($_GET['dollar']=="updatetourserv"){

    include 'db.php';
    extract($_POST);
    $desco =mysqli_real_escape_string($conn,$description);
    $dd = date("jS F, Y");

    updatetour($id,$title,$price,$desco,$oldpic,$dd);

    }


    if($_GET['dollar']=="addacomo"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Accomodation name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for accomodation   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addaccomodation($title,$price,$desco,$dd,$ltype);
        }
    }


    // updating accomodation

    if($_GET['dollar']=="updateaccserv"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");
    
        updateaccomodation($id,$title,$price,$desco,$oldpic,$dd,$ltype);
    
        }

        if($_GET['dollar']=="addlocation"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($title)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Location name  cannot be empty
                    </div>';
                # code...
            }
            elseif(empty($_FILES['image']['name'])){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                browse image for Location   
                </div>';
    
            }
            else{
                $dd = date("jS F, Y");
    
                Addlocation($title);
            }
        }


}

?>