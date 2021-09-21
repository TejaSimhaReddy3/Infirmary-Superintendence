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
	<Link rel="stylesheet" type="text/css" href="global1.css">
	<style>
   
    table,th,td{
        border:2px solid black;
        width:750px;
        background-color:white;
    }
  body{
background-image: url('pa.jpg');}
.btn {
  margin-top:5px;
  float:left;
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 12px;
  font-size: 20px;
  cursor: pointer;
  height:60px ;
  width:90px;
}
.btn2 {
  margin-top:5px;
  float:right;
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 12px;
  font-size: 20px;
  cursor: pointer;
}
/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

</style>
</head>
<body >
<div class="container">
  
  <a href='index.php'> <button class="btn" ><img src="1.png" alt="Snow" height=px width=25px> Home</button></a>
  <a href='plog.php'><button class="btn2" >Logout</button></a> </div>
 </div>
<div class="form-container">
<form name='registration' action="" method="post" onSubmit="return formValidation();">
	<img src="patient.jpg" alt="avatar" class="avatar">
	

		<div>
	<p>Username :<input type="text" name="sid" placeholder="Enter your Id"></p>
	<p>Password:&nbsp&nbsp<input type="password" name="password" placeholder="Enter Password"></p>
&nbsp&nbsp&nbsp
	<input type="submit" name="submit" value="Submit"
>&nbsp&nbsp&nbsp
</form>

</div>
<table>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th> batch</th>
                    <th>branch</th>
                    <th>id</th>
               </tr> <br>
               <?php
               $connection = mysqli_connect("localhost","root","") ;
               $db=mysqli_select_db($connection,'login1');
               if(isset($_POST['submit']))
               {
                   $id = $_POST['sid'];
                   $query = "SELECT * FROM patient where id='$id' AND password='$pas' ";

                   $query_run = mysqli_query($connection,$query);
                   while($row = mysqli_fetch_array($query_run))
                   {
                       ?>
                       <tr>
                           <td> <?php echo $row['name']; ?> </td>
                           <td> <?php echo $row['email']; ?> </td>
                           <td> <?php echo $row['batch']; ?> </td>
                           <td> <?php echo $row['branch']; ?> </td>
                           <td> <?php echo $row['id']; ?> </td>
                        </tr>
                        <?php

                      
                        
                   }
               } 
               ?>  
    </div>    
</table>
<table>
                <tr>
                    <th>id</th>
                    <th>disease</th>
                    <th> medicine</th>
                    <th>timing</th>
                    <th>date</th>
               </tr> <br>
               <?php
               $connection = mysqli_connect("localhost","root","") ;
               $db=mysqli_select_db($connection,'login1');
               if(isset($_POST['submit']))
               {
                   $id = $_POST['sid'];
                   $query = "SELECT * FROM medication where id='$id'  ";

                   $query_run = mysqli_query($connection,$query);
                   while($row = mysqli_fetch_array($query_run))
                   {
                       ?>
                       <tr>
                           <td> <?php echo $row['id']; ?> </td>
                           <td> <?php echo $row['disease']; ?> </td>
                           <td> <?php echo $row['medicine']; ?> </td>
                           <td> <?php echo $row['timing']; ?> </td>
                           <td> <?php echo $row['date']; ?> </td>
                        </tr>
                        <?php

                      
                        
                   }
               } 
               ?>  
    </div>    
</table>
</body>
</html>
