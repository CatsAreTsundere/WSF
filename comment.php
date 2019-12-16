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
$game = filter_var($game, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$cmmt = filter_var($cmmt, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>
<?php
$servername = "localhost";
$username = "catsu";
$password = "Elisanne009";
$dbname = "commtbl";

$conn mysqli_connect($servename, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT userid, name, game, comment from comm";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($resul)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "Name: " .  $row["name"]. "- Game: " . $row["game"] . "- Message" . $row["Comment"]. "<br>";
    }
    }else {
        echo "0 results";
    }
}

mysqli_close($conn);
?>