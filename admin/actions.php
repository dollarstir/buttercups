<?php 
include 'core.php';

if(isset($_GET['dollar'])){

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
}


?>