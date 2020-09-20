<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formvalidation</title>

    <!---All css file--->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<?php

    /**
     * form isseting
     */

    if(isset($_POST['add'])){

         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $email = $_POST['mail'];
         $phone = $_POST['cell'];
         $username = $_POST['uname'];
         $age = $_POST['age'];
         $gender = $_POST['gender'];

         $cell_len = strlen($phone);


        /**
         * empty value cheque
         */

        if(empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($username) || empty($age) || empty($gender)){

        $msg = '<p class="alert alert-danger">All fields are required! <button class= "close" data-dismis="alert">&times;</button></p>';

         }elseif( filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $msg = '<p class="alert alert-danger">invalid email!<button class= "close" data-dismis="alert">&times;</button></p>';
         }elseif( filter_var($phone, FILTER_VALIDATE_INT) == false){
        $msg = '<p class="alert alert-danger">invalid cell!<button class= "close" data-dismis="alert">&times;</button></p>';
         }elseif($cell_len != 11){
        $msg = '<p class="alert alert-danger">wrong cell!<button class= "close" data-dismis="alert">&times;</button></p>';
         }elseif( filter_var($age, FILTER_VALIDATE_INT) == false){
        $msg = '<p class="alert alert-danger">invalid age!<button class= "close" data-dismis="alert">&times;</button></p>';
         }elseif($age<18 || $age>30){
        $msg = '<p class="alert alert-danger">your age not supported!<button class= "close" data-dismis="alert">&times;</button></p>';
         }else{
            $msg = '<p class="alert alert-success">data stable<button class= "close" data-dismis="alert">&times;</button></p>';
        }
    }


?>

            <div class="wrap shadow-lg">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                            <h2>User Registration Form</h2>

                            <?php
                            
                            if(isset($msg)){
                                echo $msg;
                            }
                            
                            ?>

                                <div class="form-group">
                                    <input name="fname" class="form-control" type="text" placeholder="First Name">
                                </div>

                                <div class="form-group">
                                    <input name="lname" class="form-control" type="text" placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <input name="mail" class="form-control" type="text" placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input name="cell" class="form-control" type="text" placeholder="Phone">
                                </div>

                                <div class="form-group">
                                    <input name="uname" class="form-control" type="text" placeholder="User Name">
                                </div>

                                <div class="form-group">
                                    <input name="age" class="form-control" type="text" placeholder="Age">
                                </div>

                                <div class="form-group">
                                    <input name="gender" class="form-control" type="text" placeholder="Gender">
                                </div>
                                <div class="form-group">
                                    <input name="photo" class="form-control" type="file">
                                </div>
                                <div class="form-group">
                                    <input name="add" class="btn btn-primary" type="submit" value="Submit">
                                </div>

                        </form>
                    </div>
                </div>
            </div>





    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    
    
    </script>
</body>
</html>