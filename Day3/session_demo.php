<?php
     session_start();

     #store scalar value
     $_SESSION['user'] = 'admin';

     #store an array
     $_SESSION['roles'] = ['administrator','approver','editor'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <a href="profile.php">Go to Profile page</a>
</body>
</html>