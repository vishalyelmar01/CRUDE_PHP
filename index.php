<?php include 'connection.php'; ?>
<!doctype <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div>
            <form action="" method="POST">
                <input type="text" name="firstname"
                placeholder="firstname"><br><br>

                <input type="text" name="lastname"
                placeholder="lastname"><br><br>

                <input type="number" name="age"
                placeholder="age"><br><br>

                <input type="submit" name="save_btn" 
                value="Save">
                <button><a href="view.php">View</a></button>
                
</form>
</div>
<?php
if(isset($_POST['save_btn'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['age'];
    $query="INSERT INTO student (firstname,lastname,age)VALUES('$fname','$lname','$age')";

    $data=mysqli_query($con,$query);
    if($data){
        ?>

        <script type="text/javascript">
            alert("Data Saved Successfully");
            </script>
            <?php

    }
    else{
        ?>
        <script type="text/javascript">
        alert("Please try again");
        </script>
        <?php
    }

}
?>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
    </body>
</html>