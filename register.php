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

    <div class="body__container">

        <div class="navigation">
            <ul>
                <li> <a href="index.php"> All data </a> </li>
                <li> <a href="add-student.php"> Add </a> </li>

                <li> <a href=""> </a> </li>
            </ul>

            <ul>
                <li> <a href="login.php"> Login </a> </li>
            </ul>
        </div>


        <form method="POST" action="backend.php">

            

      <div class="form_row">
        <label for="names">Names</label>
        <input
          type="text"
          name="names"
          id="names"
          class=""
          placeholder=""
          required
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
        />
      </div>

      

      <div class="form_row">
        <label for="password"> Password </label>
        <input
          type="password"
          name="password"
          id="password"
          class=""
          placeholder=""
          required
        />
      </div>

      <div class="form_row">
        <label for="password"> Confirm Password </label>
        <input
          type="password"
          name="confirm__password"
          id="confirm__password"
          class=""
          placeholder=""
          required
        />
      </div>
            <div class="form_row">
                <input style="max-width:200px"
                 type="submit"
                 name="register"
                 class="submit-cls" value="Register" />
            </div>
        </form>

        <p style="text-align:center" >
            Have an account ? <span> <a href="login.php"> Login </a> </span>
        </p>


    </div>
</body>

</html>