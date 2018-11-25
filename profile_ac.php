<?php

if(isset($_POST['submit'])){
    
     $target="images/".basename($_FILES['image']['name']);  
    $id = $_POST['id'];
    echo $id;
    $connection = mysqli_connect('localhost','root','','talentin');
    $image=$_FILES['image']['name'];  
    $text=$_POST['text'];
    $query="INSERT into post(image,postcontent,userid) VALUES('$image','$text',$id)";
    mysqli_query($connection,$query );
    if(!move_uploaded_file($_FILES ['image']['tmp_name'],$target)){
        echo("hurraay");
                                                                  }
                           }

?>
  