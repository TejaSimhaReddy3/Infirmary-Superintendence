<!DOCTYPE html>
<head>
    <title> search</title>
    <style>
    body{
        color:white;
        font-family: "Times New Roman" ,'cursive';

    }
    .a{
       padding:5px 100px;
    }
    .b{
        padding :10px 100px
    }
    .img1{
	margin-top:30px;
	margin-bottom:30px;
	margin-right:50px;
	margin-left:60px;
	width:250px;
	height:250px;
}
    .container1{
    width:300px;
	height:410px;
	background:rgba(0,0,0,0.4);
	color:white;
	top:50%;
	margin-left:100px;
	position:absolute;
	transform:translate(50%,-50%);
	padding:10px 30px;
	
    }
    .container2{
    width:300px;
	height:410px;
	background:rgba(0,0,0,0.4);
	color:white;
	top:50%;
	margin-left:500px;
	position:absolute;
	transform:translate(50%,-50%);
	padding:10px 30px;
	
    }
    .btn1{
  border: none;
  color: white;
  padding: 30px 30px;
  font-size: 16px;
  cursor: pointer;
}
.bg{
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	position: absolute;
	z-index: -1;
	background-size: cover;
	background-attachment: fixed;
}
.btn{
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
.btn2{
    float:right;
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
</style>
</head>
<body >
<h1 align= center >Infirmary Superintendence</h1>
<hr>
<div class="container">
  
  <a href='index.php'> <button class="btn" ><img src="1.png" alt="Snow" height=25px width=25px> Home</button></a>

  <a href='adminlogout.php'><button class="btn2" >Logout</button></a> </div>

<img class='bg' src='b.jpg' alt='background'>
<div class="container1">
<h1 align =center>DOCTOR</h1>
<a href="retrive1.php"><img align= right class="img1" src="doctor.png"></a>
</div>
<div class="container2">
<h1 align= center >PATIENT<h1>
<a href="retrive.php"><img align=right class= "img1" src='patient.png'></a>

</div>
</body>

</html>
