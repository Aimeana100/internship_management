<?php session_start(); 

include('conn.php');

if(isset($_GET['edit_id']) && $_GET['edit_id'] != "" ){
    $id = $_GET['edit_id'];
    $result = $conn->query("SELECT * FROM student WHERE id= $id LIMIT 1");

    $row = $result->fetch_assoc();
   
        $id = $row['id'];
        $names = $row['names'];
        $email = $row['email'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $password = $row['password'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/style.css" />
    <style></style>
  </head>
  <body>
    <div class="navigation">
      <ul>
        <li><a href="index.php"> All data </a></li>
        <li><a href="add-student.php"> Add </a></li>
        <!-- <li>  <a href="">  </a> </li> -->
      </ul>
    </div>

    <h1>My Edit form</h1>

    <!-- method : post, get -->
    <!-- action : link (server file address) -->


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

    <form method="POST" action="backend.php">

      <div class="form_row">
        <label for="names">Names</label>
        <input
          type="text"
          name="names"
          id="names"
          class=""
          required
          value="<?php echo $names ?>"
        />
      </div>

      <div class="form_row">
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          class=""
          placeholder=""
          required
          value="<?php echo $email ?>"
        />
      </div>

      <div class="form_row">
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
          <option  value="">--select--</option>
          <option <?php echo $gender == "M" ? "selected" : ""; ?>  value="M">Male</option>
          <option <?php echo $gender == "F" ? "selected" : ""; ?>  value="F">Female</option>
        </select>
      </div>


      <div class="form_row">
        <label for="dob">Date</label>
        <input
          type="date"
          name="dob"
          id="dob"
          class=""
          placeholder=""
          required
          value="<?php echo $dob ?>"
        />
      </div>
      <input type="hidden" name="id" value="<?php echo $id ;?>">

      <div class="form_row">
        <input type="submit" name="update" class="submit-cls" value="Update" />
      </div>
    </form>
  </body>
</html>
