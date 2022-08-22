<!DOCTYPE HTML>
<html>

<head>
</head>

<?php

  if( isset($_POST['user']) && isset($_POST['password'])){
    session_start();
    if($_POST['user'] == "frodo" && $_POST['password'] == "hobbit"){
      $_SESSION['user'] = $_POST['user'];
      header("Location: welcome.php");
    }else{
     $_SESSION['error'] = "Login failed :(";
    }
  }

?>

<body>

    <h1>Please login:</h1>
    <form method="POST" action="login.php">
        <label for="user">User:</label>
        <input type="text" id="user" name="user" required>
        <br>
        <label for="pasword">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <div style="color:red; font-size: 10px">
        <?php
          if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          }
        ?>
        </div>
        <button type="submit">Submit</button>
    </form>

</body>

</html>