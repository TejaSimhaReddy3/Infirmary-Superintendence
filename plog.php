<?php 
$set=mysqli_connect("localhost","root","","login1");

// Check connection
/*if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/

if(isset($_POST['submit'])){
    
  	$id=$_POST['sid'];
	$pas=md5($_POST['password']);
    
 	$ret=mysqli_query($set,"SELECT * FROM patient WHERE id='$id' AND password='$pas'");
	if(mysqli_num_rows($ret)>0){
        header('location:patientlog.php');
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
<style>
body{
	background-image: url('pa.jpg');
	height:500px;
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	padding-top:10vh;
}

.form-container{
	width:350px;
	height:460px;
	background:rgba(0,0,0,0.5);
	color:white;
	top:50%;
	margin-left:350px;
	position:absolute;
	transform:translate(50%,-50%);
	box-sizing:border-box;
	padding:50px 30px;
	
}
.avatar{
		width:100px;
		height:100px;
		border-radius:50%;
		position:absolute;
		top:-50px;
		left:calc(50% -50%)
}

.form-container input{
		width:100%;
		margin-bottom:20px;
		padding: 6px 0px;
	}

.form-container input[type="text"],input[type="password"]{
	border:none;
	background:transparent;
	border-bottom:2px solid #fff;
	height:40px
	outline : none;
	color: #fff ;
	font-size: 15px;
}

.form-container input[type="button"]{
border:none;
	background:blue;
	border-bottom:1px  #fff;
	border-radius:15px;
	height:40px
	outline:none;
	color:  #fff;
	font-size: 19px;

}

.form-container input[type="button"]:hover{
	cursor:pointer;
	background:#39dc79;
	color:#000;}

.form-container a{
	font-size:15px;
	color:#fff;
}

.form-container a:hover{
	color:#39dc79;
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

	<title>Login form</title>
</head>
<body>
<div class="container">
  
  <a href='index.php'> <button class="btn" ><img src="1.png" alt="Snow" height=25px width=25px> Home</button></a>
 </div>
<div class="form-container">
<form name='registration' action="" method="post" onSubmit="return formValidation();">
	<img src="patient.jpg" alt="avatar" class="avatar">
	
		<h1>Patient login</h1>
		<div>
	<p>Username :<input type="text" name="sid" placeholder="Enter your Id"><br><br></p>
	<p>Password:&nbsp&nbsp<input type="password" name="password" placeholder="Enter Password"></p>
<br>&nbsp&nbsp&nbsp
	<input type="submit" name="submit" value="Submit"
>&nbsp&nbsp&nbsp
		<a href="reg.php">Don't have an account??</a>
</form>
</div>
</body>
</html>
