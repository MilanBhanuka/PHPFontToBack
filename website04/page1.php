<?php
      if(isset($_POST['submit'])){
            session_start(); // Start the session
            
            $_SESSION['name'] = htmlentities($_POST['name']);
            $_SESSION['email'] = htmlentities($_POST['email']);

            header('Location: page2.php');
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP Sessions</title>
</head>
<body>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="name" placeholder="Enter Name"><br><br>
            <input type="text" name="email" placeholder="Enter Email"><br><br>
            <input type="submit" name="submit" value="Submit">
      </form>
</body>
</html>