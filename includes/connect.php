<?php 

$host = "localhost";
$username = "root";
$password = "root";
$db = "radioheadInfographic";


$conn = mysqli_connect($host, $username, $password, $db);
//add line when on windows and nothing shows up
mysqli_set_charset($conn, 'utf8');

if(!$conn){
    echo "something broke...";
    exit;
}

//echo "connected!";

//select data from db
// $myQuery = "SELECT * FROM mainmodel";
// $result = mysqli_query($conn, $myQuery);
// $rows = array();
// //fill array with result data
// while($row = mysqli_fetch_assoc($result)){
//     $rows[] = $row;
// }

//get one item from db
if (isset($_GET["member"])){
    $bandmember = $_GET["member"];

    $myQuery = "SELECT * FROM main WHERE name ='$bandmember'";

    $result = mysqli_query($conn, $myQuery);
    $rows = array();
//fill array with result data
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
}

//encode result and send back
echo json_encode($rows);
?>