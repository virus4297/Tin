<?php
session_start();
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    

    $connection = mysqli_connect('localhost','root','','talentin');
    
    if($connection)
        echo("connected");
    
    else
        die("connection failed"); 

    $query= "SELECT * FROM reg where email='$username' and password = '$password'";
    
    $result1=mysqli_query($connection,$query);
    if(mysqli_num_rows($result1) == 1){
        $row = mysqli_fetch_assoc($result1);
        
        $id = $row['userid'];
        $_SESSION['id'] = $id;
        
        
 header('location:profile.php');
        
    } else {
        header('location:login.php');
     
    }
    
}
?>


