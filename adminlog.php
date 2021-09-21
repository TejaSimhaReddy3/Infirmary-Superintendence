<?php 
$set=mysqli_connect("localhost","root","","login1");
// Check connection
/*if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/


if(isset($_POST['submit'])){
    
  	$id=$_POST['id'];
	$pas=($_POST['password']);
    
 	$ret=mysqli_query($set,"SELECT * FROM admin WHERE id='$id' AND password='$pas'");
	if(mysqli_num_rows($ret)>0){
        header('location:adminlo.php');
    }
    else{
		echo '<script type="text/javascript"> alert("Please Enter Your Credentials Correctly") </script>';
    }
        
}
else{

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<style>
	body{
	background-image :url(ad.jpg);
}
.btn{
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
	</style>
	<Link rel="stylesheet" type="text/css" href="global2.css">
</head>
<body>
<div class="container">
  
  <a href='index.php'> <button class="btn" ><img src="1.png" alt="Snow" height=25px width=25px> Home</button></a>
 </div>
<div class="form-container">
<form name='registration' action="" method="post" onSubmit="return formValidation();">
	<img src="admin1.png" alt="avatar" class="avatar">
	
		<h1>Welcome Admin</h1>
		<div>
	<p>Admin Id :<input type="text" name="id" placeholder="Enter your Number"><br><br></p>
	<p>Password:<input type="password" name="password" placeholder="Enter Password"></p>
<br>&nbsp&nbsp&nbsp
	<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
