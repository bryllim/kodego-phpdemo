<html>
<?php
    session_start();
    if(!isset($_SESSION['user'])){
        $_SESSION['error'] = "Oops! You need to login first!";
        header("Location: login.php");
    }
        
?>
<head></head>
<body>
    <h1>Welcome
        <?php
            echo $_SESSION['user'];
        ?>!
    </h1>
    <a href="logout.php">Logout</a>
    <?php include 'footer.php';?>
</body>
</html>