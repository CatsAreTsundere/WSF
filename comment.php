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
    //Input sanitation, turns stuff like ' or * othr variables that dont messs with PHP
    $nuser = filter_var($user, FILTER_SANITIZE_STRING);
    $ngame = filter_var($game, FILTER_SANITIZE_STRING);
    $ncmmt = filter_var($cmmt, FILTER_SANITIZE_STRING);
?>

<div>

<?php
//db login info
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

    //Inseting data into the the database
    if (mysqli_query($conn, $sql_ins)){
        echo "Thank you for your comment! \r\n";
        echo "<br>";
    }

    else {
        Echo "That didn't go through.. Error: " . $sql . mysqli_error($conn);
    }
    
    //Checking results of inseting stuff
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0){
    //output on screen
    while ($row = mysqli_fetch_assoc($result)){
        echo "\r\nID:" . $row["userid"] . " - Name: " .  $row["name"]. "- Game: " . $row["game"] . "- Message: " . $row["Comment"]. "<br>";
    }
    //If no output put (basically checking if SQL gets the inputs to the database)
    }else {
        echo "0 results";
    }
//Close connection
mysqli_close($conn);
?>

</div>

</body>

</html>
