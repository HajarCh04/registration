
<?php
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+[]{}<>/';
$password = substr(str_shuffle($chars), 0, 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>Registration Successful!</h1>
    <p>Your temporary password is: <strong><?php echo $password; ?></strong></p>
    <p>Please use this password to log in and then change it to a new password.</p>
  </div>
  <button><a href="index.php">OK</a></button>
</body>

</html>
