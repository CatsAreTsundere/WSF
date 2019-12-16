<!doctype php>
<html>

<head>
<title>Comments</title>
</head>
<body bgcolor="c9e9f6">
<h1>Here are some of your comments</h1>

<?php
$user = ($_GET['name']);
$game = ($_GET['game']);
$cmmt = ($_GET['message']);

$user = filter_var($user, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$game = filter_var($game, FILTER_SANITIZE_STRING);
$cmmt = filter_var($cmmt, FILTER_SANITZIE_STRING);
?>

<div>

<?php
//db log in info
$servername = "localhost";
$username = "catsu";
$password = "Elisanne009";
$dbname = "commtbl";

$conn = mysqli_connect($servename, $username, $password, $dbname);
//connection check
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT userid, name, game, Comment from comm;";
$sql_ins ="INSERT INTO comm (name, game, Comment) values ('{$user}','{$game}','{$cmmt}');";
$result = mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)){
    echo "Thank you for your comment!";
}
else {
    Echo "That did not get through.. Error: " . $sql . mysqli_error($conn);
}

if (mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "ID:" . $row["userid"] . "Name: " .  $row["name"]. "- Game: " . $row["game"] . "- Message" . $row["Comment"]. "<br>";
    }
    }else {
        echo "0 results";
    }
}

mysqli_close($conn);
?>

</div>

</body>

</html>