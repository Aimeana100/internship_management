<?php

session_start();

include('conn.php');

// $sql  = " ";
$result = $conn->query("SELECT * FROM student");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    </style>
</head>

<body>

    <div class="navigation">
        <ul>
            <li> <a href="index.php"> All data </a> </li>
            <li> <a href="add-student.php"> Add </a> </li>

            <!-- <li>  <a href="">  </a> </li> -->
        </ul>
    </div>

    <h1>My data</h1>

    <div class="message__output">
      <?php
      
      if(isset($_SESSION["success-message"])){

        echo '<p class="success" >' . $_SESSION["success-message"] . '</p>';

        unset($_SESSION["success-message"]);
      
      }
      
      if(isset($_SESSION["fail-message"])){

        echo '<p class="error" >' . $_SESSION["fail-message"] . '</p>';
        unset($_SESSION["fail-message"]);
      
      }
      
      ?>
 
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Names</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Pass </th>
                <th>Option </th>
            </tr>
        </thead>


        <tbody>
            

            <?php

            while($row = $result->fetch_assoc()){
                echo "<tr><td>". $row['id']  . "</td>
                      <td>". $row['names']  . "</td>
                      <td>". $row['email']. "</td>
                      <td>". $row['dob'] . "</td> 
                      <td>". $row['gender']. "</td> 
                      <td>". $row['password'] . "</td> 
                      <td> <a href='edit.php?edit_id=" .$row['id']. "' > Edit </a> 
                           <a href='backend.php?delete_id=" .$row['id']. "'> Delete </a>
                      </td>
                      </tr>";

            }

            
            ?>
               
            
        </tbody>
    </table>
</body>

</html>