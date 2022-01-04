<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        th{
            text-align: center;
            background-color: #FF7F50;
            color: white;
        }
    </style>
</head>
 
<body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="#" alt="" width="30" height="24" class="d-inline-block align-text-top">
      CRUD PHP
    </a>
  </div>
</nav>
<a href="add.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1 style="margin: auto;">
 
    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><center><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></center></td></tr>";        
    }
    ?>
    </table>
</body>
</html>