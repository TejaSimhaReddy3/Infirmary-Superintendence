<!DOCTYPE html>
<head>
    <title> search</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="id" placeholder="Enter patient_ID"/>
            <input type="submit" name="search" value="SEARCH BY ID"/>
        </form>
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
               $db=mysqli_select_db($connection,'login');
               if(isset($_POST['search']))
               {
                   $id = $_POST['id'];
                   $query = "SELECT * FROM register where id='$id'";

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


</body>

</html>