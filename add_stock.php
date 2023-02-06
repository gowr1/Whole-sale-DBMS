<?php
 session_start(); 
  include("database.php");

  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $totp = $_POST['totp'];

  if ($name == 1) {
    $amt1 = $quantity * $price;
    $qry1 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 10000";
    if (!$conn->query($qry1) === TRUE) {  
        echo "Error: " . $qry1 . "<br>" . $conn->error;
    }
    
}

else if ($name == 2) {
    $amt2 = $quantity * $price;
    $qry2 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 20000";
    if (!$conn->query($qry2) === TRUE) {  
        echo "Error: " . $qry2 . "<br>" . $conn->error;
    }
    
}
else if ($name == 3) {
    $amt3 = $quantity * $price;
    $qry3 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 30000";
    if (!$conn->query($qry3) === TRUE) {  
        echo "Error: " . $qry3 . "<br>" . $conn->error;
    }
    
}
else if ($name == 4) {
    $amt4 = $quantity * $price;
    $qry4 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 40000";
    if (!$conn->query($qry4) === TRUE) {  
        echo "Error: " . $qry4 . "<br>" . $conn->error;
    }
    
}
else if ($name == 5) {
    $amt5 = $quantity * $price;
    $qry5 = "UPDATE `product` SET stock= stock + $quantity WHERE pid = 50000";
    if (!$conn->query($qry5) === TRUE) {  
        echo "Error: " . $qry5 . "<br>" . $conn->error;
    }
}
  header("Location: transaction.php");//?transaction_id=$transactionId");
  exit();
 ?> 