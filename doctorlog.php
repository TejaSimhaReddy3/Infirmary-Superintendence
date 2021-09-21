<?php 
$set=mysqli_connect("localhost","root","","login1");

// Check connection
/*if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/

if(isset($_POST['submit'])){
    
  	$id=$_POST['email'];
	$pas=md5($_POST['password']);
    
 	$ret=mysqli_query($set,"SELECT * FROM doctor1 WHERE email='$id' AND password='$pas'");
	if(mysqli_num_rows($ret)>0){
        header('location:contentp.php');
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
	<Link rel="stylesheet" type="text/css" href="global.css">
</head>
<style>
	body{
		backgroung-image:url('bg.jpg')
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
<body>
<div class="container">
  
  <a href='index.php'> <button class="btn" ><img src="1.png" alt="Snow" height=25px width=25px> Home</button></a>
 </div>
<div class="form-container">
<form name='registration' action="" method="post" onSubmit="return formValidation();">
	<img src="doctor.png" alt="avatar" class="avatar">
	
		<h1>Doctor Login</h1>
		<div>
	<p>Mail Id :<input type="text" name="email" placeholder="Enter your Mail"><br><br></p>
	<p>Password:&nbsp&nbsp<input type="password" name="password" placeholder="Password"></p>
<br>&nbsp&nbsp
	<input type="submit" name="submit" value="Submit">&nbsp&nbsp
</form>
</div>
</body>
</html>
