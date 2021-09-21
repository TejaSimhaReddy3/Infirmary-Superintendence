<?php
$set=mysqli_connect("localhost","root","","login1");
//include("setting.php");
$name=$_POST['name'];
$qualification=$_POST['qualification'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$experience=$_POST['experience'];
$username=$_POST['username'];
$password=md5($_POST['password']);
if($name==NULL ||$qualification ==NULL ||$email==NULL  || $contact==NULL ||  $experience==NULL ||$username==NULL || $_POST['password']==NULL)
{
}
else
{
	$sql=mysqli_query($set,"INSERT INTO doctor1 (name,qualification,email,contact,experience,username,password) VALUES('$name','$qualification','$email','$contact','$experience','$username','$password')");
	if($sql)
	{
		echo '<script type="text/javascript"> alert("Registration Successful") </script>';
	}
	else
	{
		echo '<script type="text/javascript"> alert("User already exists") </script>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html  charset=utf-8" />
<title>Registration Page</title>
<link href="reg1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="signbox">
<h1>Doctor Registration</h1>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
<tr><td class="labels">Qualification :</td><td><input type="text" name="qualification" class="fields" placeholder="Enter Your Education Details" required="required"/></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>
<tr><td class="labels">Contact No:</td><td><input type="phone" name="contact" class="fields" placeholder="Enter Phone Number" minlength="10" maxlength="10" required="required"/> </td></tr>
<tr><td class="labels">Experience : </td><td><input type="text" name="experience" class="fields" placeholder="Enter Experience" required="required" size="25" /></td></tr>
<tr><td class="labels">Username :</td><td><input type="text" name="username" class="fields" placeholder="Enter Username" required="required"/></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="password" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" class="fields" /></td></tr>
</table>
</form><br />
<br />
<a href="retrive1.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>
