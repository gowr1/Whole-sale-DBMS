<?php
include("database.php");
session_start();
// $uid = $_SESSION['uid'];
$uid = 1001;
$quantity1 = $_POST['quantity1'];
$price1 = $_POST['price1'];
$yes_or_no1 = $_POST['yes_or_no1'];
$totp1 = $_POST['totp1'];

$quantity2 = $_POST['quantity2'];
$price2 = $_POST['price2'];
$yes_or_no2 = $_POST['yes_or_no2'];
$totp2 = $_POST['totp2'];

$quantity3 = $_POST['quantity3'];
$price3 = $_POST['price3'];
$yes_or_no3 = $_POST['yes_or_no3'];
$totp3 = $_POST['totp3'];

$quantity4 = $_POST['quantity4'];
$price4 = $_POST['price4'];
$yes_or_no4 = $_POST['yes_or_no4'];
$totp4 = $_POST['totp4'];

$quantity5 = $_POST['quantity5'];
$price5 = $_POST['price5'];
$yes_or_no5 = $_POST['yes_or_no5'];
$totp5 = $_POST['totp5'];
$date = date('Y-m-d');
$query = "INSERT INTO `transaction`(`pidt`, `uidt`, `qty`, `amt`, `ip_date`, `order_date`) VALUES ";

if ($yes_or_no1) {
    $amt1 = $quantity1 * $price1;
    $qry1 = "UPDATE `product` SET stock= stock + $quantity1 WHERE pid = 10000";
    if (!$conn->query($qry1) === TRUE) {  
        echo "Error: " . $qry1 . "<br>" . $conn->error;
    }
    $query .= "(10000, $uid, $quantity1, $amt1, NULL,'$date'),";
}

if ($yes_or_no2) {
    $amt2 = $quantity2 * $price2;
    $query .= "(10000, $uid, $quantity2, $amt2, NULL,'$date'),";
}
if ($yes_or_no3) {
    $amt3 = $quantity3 * $price3;
    $query .= "(10000, $uid, $quantity3, $amt3, NULL,'$date'),";
}
if ($yes_or_no4) {
    $amt4 = $quantity4 * $price4;
    $query .= "(10000, $uid, $quantity4, $amt4, NULL,'$date'),";
}
if ($yes_or_no5) {
    $amt5 = $quantity5 * $price5;
    $query .= "(10000, $uid, $quantity5, $amt5, NULL,'$date'),";
}
$query = rtrim($query, ',');
$transactionId =  mysql_insert_id();
if ($conn->query($query) === TRUE) {
        header("Location: transaction.php?transaction_id=$transactionId");
      exit();
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
?>