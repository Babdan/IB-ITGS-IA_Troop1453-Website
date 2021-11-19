<?php

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password']) && $_POST['password']==$_POST['cpassword']):
    
    $sql = "INSERT INTO accounts (email, password) VALUES (:email, :password)"; 
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    if( $stmt->execute() ):
        $message = 'Account Created Succesfully';
    else:
        $message = 'There Was An Issue Creating Your Account';
    endif;

endif;
?>

 <!DOCTYPE html>
        <html>
        <head>
        <title>Troop1453 Registration</title>
<link rel="stylesheet" href="loginstyle.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="assets/images/bsa-logo.png" type="image/x-icon">
<link rel='icon' href='favicon.png' type='image/x-icon'>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        </head>


    <body>
  <div class="main">
    <p class="sign" align="center">Sign up</p>
    
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form action="register.php" method="POST">

    <form class="form1">
      <input class="un " type="text" align="center" placeholder="Enter your email" name="email">
      <input class="pass" type="password" align="center" placeholder="Enter a password" name="password">
      <input class="pass" type="password" align="center" placeholder="Confirm password" name="cpassword">
      <input type="submit" class="submit" align="center">
      <p class="forgot" align="center"><a href="login.php">Sign in instead</p>
      </form> 
                
    </div>
     
</body>

    </html>