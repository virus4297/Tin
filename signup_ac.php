<?php
if(isset($_POST['submit']))
{
    $username= $_POST['name'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $usn = $_POST['usn'];
    $dept = $_POST['department']; 
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $gender= $_POST['gender'];
 
    $connection = mysqli_connect('localhost','root','','talentin');
    if(!$connection){
        echo "yaay";
    }
   
    if($password == $cpassword){

    $query= "INSERT INTO reg (name,password,usn,gender,mobile,dept,email) VALUES ('$username','$password','$usn','$gender',$phone,'$dept','$email')";
         $result1=mysqli_query($connection,$query);
//       if(!move_uploaded_file($_FILES ['image']['tmp_name'],$target))
//        echo("oh noo");   

    }
else{
    echo("password dont match");
}
    if(!$result1)
        die("data cannot be sent");
    
   header('location:login.php');
}

?>


