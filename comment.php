<!doctype php>
<html>

<head>
<title>Comments</title>
</head>
<body bgcolor="c9e9f6">
<h1>Here are some of your comments</h1>

<?php
$user = htmlspecialchars($_GET['user']);
$game = htmlspecialchars($_GET['game']);
$cmmt = htmlspecialchars($_GET['message']);

$nuser = filter_var($user, FILTER_SANITIZE_STRING);
$ngame = filter_var($game, FILTER_SANITIZE_STRING);
$ncmmt = filter_var($cmmt, FILTER_SANITIZE_STRING);



?>

<div>

<?php
//db log in info
$servername = "localhost";
$username = "catsu";
$password = "Elisanne009";
$dbname = "commtbl";



$conn = mysqli_connect($servername, $username, $password, $dbname);
//connection check
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT userid, name, game, Comment from comm;";
$sql_ins ="INSERT INTO comm (name, game, Comment) values ('{$nuser}','{$ngame}','{$ncmmt}');";


if (mysqli_query($conn, $sql_ins)){
    echo "Thank you for your comment! \r\n";
    echo "<br>";
}
else {
    Echo "That didn't go through.. Error: " . $sql . mysqli_error($conn);
}
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){
    //otp on screen
    while ($row = mysqli_fetch_assoc($result)){
        echo "\r\nID:" . $row["userid"] . " - Name: " .  $row["name"]. "- Game: " . $row["game"] . "- Message: " . $row["Comment"]. "<br>";
    }
    }else {
        echo "0 results";
    }

mysqli_close($conn);
?>

</div>

</body>

</html>
