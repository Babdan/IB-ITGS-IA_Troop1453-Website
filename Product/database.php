<?php 
$server = 'localhost:3307';
$username = 'root';
$password = '1234';
$database = 'bog';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}catch(PDOException $e){
    die("connection failed: " . $e->getMessage());
}

function getPending(){
    global $conn;
    $sql="SELECT id,email,password,verified,admin FROM accounts WHERE verified = 0";
    $records = $conn->prepare($sql);
    $records->execute();
    $results = $records->fetchAll(PDO::FETCH_ASSOC);
    while($row = array_shift($results)){
        $email=$row['email'];
        $pending.=$email." <input type='checkbox' id='$email' name='emails[]' value='$email'><br>";
    }
    return $pending;
}

function verifyAccount($emails){
    global $conn;
    for ($x=0;$x<count($emails);$x++){
        $email=$emails[$x];
        $sql = "UPDATE accounts SET verified = 1 WHERE email = ?";
        $records = $conn->prepare($sql);
        $records->execute([$email]);
    }

}
?>