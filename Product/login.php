<?php
session_start();

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
    
    $records = $conn->prepare('SELECT id,email,password,verified,admin FROM accounts WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        
        $_SESSION['user_id'] = $results['id'];
        $_SESSION['admin'] = $results['admin'];
        $verified = $results['verified'];
       if($verified ==1){
        if ($_SESSION['admin'] ==1){
          header("Location: admin.php");
        }
        else {
            header("Location: services.php");
        }
      }
      else {
            $message = 'Your login is pending. Please wait for account appproval';
      }
    } 
    else{
       $message = 'There was an error loggin in, please double check the email and password.';
    }

endif;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/bsa-logo.png" type="image/x-icon">
  <link rel='icon' href='favicon.png' type='image/x-icon'>
  <title>Troop1453 Login</title>
  <link rel="stylesheet" href="loginstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form action="login.php" method="POST">

    <form class="form1">
      <input class="un " type="text" align="center" placeholder="Email" name="email">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <input type="submit" class="submit" align="center">
      <p class="forgot" align="center"><a href="register.php">Register A New Troop1453 Account</p>
      </form> 
                
    </div>
     
</body>

</html>