<?php $insert = false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    
    $con = mysqli_connect($server, $username, $password);

    
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $email = $_POST['email'];
        $age =  $_POST['age'];
        $desc = $_POST['desc'];
        $sql=INSERT INTO `new`.`new` (`Firstname`, `Lastname`, `email`, `age`, `Disc`) VALUES ($FirstName, $LastName, $email, $age, $desc);
    if($con->query($sql) == true){
        echo "Successfully inserted";}
        $con->close();
        ?>
        
        