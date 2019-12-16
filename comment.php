<?php
$servername = "localhost";
$username = "catsu";
$password = "Elisanne";
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