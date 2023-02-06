<?php
 session_start(); 
  include("database.php");
  $uidadd = 1003;
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $totp = $_POST['totp'];
  $date = date('Y-m-d');
  $query = "INSERT INTO `transaction`(`pidt`, `uidt`, `qty`, `amt`, `ip_date`, `order_date`) VALUES ";

  if ($name == 1) {
    $amt = $quantity * $price;
    $qry1 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 10000";
    if (!$conn->query($qry1) === TRUE) {  
        echo "Error: " . $qry1 . "<br>" . $conn->error;
    }
    $query .= "(10000, $uidadd, $quantity, $amt,'$date',NULL),";
}

else if ($name == 2) {
    $amt = $quantity * $price;
    $qry2 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 20000";
    if (!$conn->query($qry2) === TRUE) {  
        echo "Error: " . $qry2 . "<br>" . $conn->error;
    }
    $query .= "(20000, $uidadd, $quantity, $amt,'$date',NULL),";
}
else if ($name == 3) {
    $amt = $quantity * $price;
    $qry3 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 30000";
    if (!$conn->query($qry3) === TRUE) {  
        echo "Error: " . $qry3 . "<br>" . $conn->error;
    }
    $query .= "(30000, $uidadd, $quantity, $amt,'$date',NULL),";
}
else if ($name == 4) {
    $amt = $quantity * $price;
    $qry4 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 40000";
    if (!$conn->query($qry4) === TRUE) {  
        echo "Error: " . $qry4 . "<br>" . $conn->error;
    }
    $query .= "(40000, $uidadd, $quantity, $amt,'$date',NULL),";
}
else if ($name == 5) {
    $amt = $quantity * $price;
    $qry5 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 50000";
    if (!$conn->query($qry5) === TRUE) {  
        echo "Error: " . $qry5 . "<br>" . $conn->error;
    }
    $query .= "(50000, $uidadd, $quantity, $amt,'$date',NULL),";
}
$query = rtrim($query, ',');
//$transactionId =  mysql_insert_id();
if ($conn->query($query) === TRUE) {
        header("Location: transaction.php");//?transaction_id=$transactionId");
      exit();
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
 ?> 