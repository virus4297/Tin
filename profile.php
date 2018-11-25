<?php
include('loginaccess.php');
//if(isset($_POST['submit'])){
//    
//     $target="images/".basename($_FILES['image']['name']);  
    $connection = mysqli_connect('localhost','root','','talentin');
//   /* if($connection)
//        echo("connected");*/
//    $image=$_FILES['image']['name'];  
//   
//    $text=$_POST['text'];
//    $query="INSERT into post(image,postcontent,userid) VALUES('$image','$text','1')";
//    mysqli_query($connection,$query );
//    if(!move_uploaded_file($_FILES ['image']['tmp_name'],$target)){
//        echo("hurraay");
//}
    $id = $_SESSION['id'];
    $query= "SELECT * FROM reg where userid = $id";
    $result1=mysqli_query($connection,$query);






?>
    <!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<link rel="stylesheet" type="text/css" href="profile.css">

</head>
<body>
	<div class="topnav">
		<div class="tnleft">
		  <a href="index.php">Home</a>
		  <a href="discover.php">Discover</a>
		  <a href="#about">About</a>
		  <a href="#contact">Contact</a>				
		</div>
		<div class="tnright">
			<a href="profile.php">Post</a>
		</div>
	</div>

	<div class="main">

		<div class="club">
              <?php while($row = (mysqli_fetch_assoc($result1))) {?>
	  			<div class="post">
		  				<div class="img-wrap" id="club-col">
<!--
                          <?php  $img = $row['image']?>
		                   	<?php echo "<img src=images/$img id='posting'"; ?>
-->
		                </div>
		                <div id="club-row"></div>
						<?=$row['name']?>
						<br><br>
						<?=$row['mobile']?>
						<br><br>
						<?=$row['email']?>
						<br><br>
<!--						<?=$row['']?>-->
	  			</div>
	  			<?php } ?>
	  							<input type="file" name="pimage" accept="img/jpeg , img/png">
						<input type="hidden" value="<?=$id?>" name="id">
						<button type="submit" name="psubmit" value="upload" class="[ btn btn-default ]">Post It!!</button>
	  		</div>

		<div class="club">
  			Create a Event Post.
  			<div class="post">
	  				<form action="profile_ac.php" method="post" enctype="multipart/form-data">
	                    <textarea name="text" rows="4">...</textarea>
					<br><br>
						<input type="file" name="image" accept="img/jpeg , img/png">
						<input type="hidden" value="<?=$id?>" name="id">
					<br><br>
						<button type="submit" name="submit" value="upload" class="[ btn btn-default ]">Post It!!</button>
					</form>
  			</div>
	  	</div>
	</div>
	<div class="botnav">
		<div class="bnleft">
			<img id="bnimg" src="logo.png">
		</div>
		<div class="bnmid">
		  <a href="index.php">Home</a>
		  <a href="discover.php">Discover</a>
		  <a href="#about">About</a>
		  <a href="#contact">Contact</a>
		</div>
		<div class="bnright">
			<a href="profile.php">Post</a>
		</div>
	</div>
</body>
</html>




