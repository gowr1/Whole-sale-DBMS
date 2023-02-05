<?php
 session_start(); 
  include("database.php");
  $email = $_POST['username'];
  $pswrd = $_POST['password'];
  $category = $_POST['category'];

  if (!isset($email) || !isset($pswrd)) {
    if ($category == 1) {
      header("Location: seller.php?error=User Name/Password is required");
      exit();
    } else if ($category == 0) {
      header("Location: buyer.php?error=User Name/Password is required");
      exit();
    }
  }
  $query = "SELECT * FROM user WHERE email = '$email' AND password = '$pswrd' AND catagory = $category";

  $result = $conn->query($query);
  if ($result->num_rows <= 0) {
    if ($category == 1) {
      header("Location: seller.php?error=User not exists");
      exit();
    } else if ($category == 0) {
      header("Location: buyer.php?error=User not exists");
      exit();
    }
  } else {
    while($row = $result->fetch_assoc()) {
      if ($row['user_name'] === $email && $row['password'] === $pswrd) {
          $_SESSION['user_name'] = $row['user_name'];
          $_SESSION['uid'] = $row['uid'];
        }
    }
    if ($category == 1) {
      $_SESSION['category'] = 'Seller';
      header("Location: sellerpage.html");
      exit();
    } else if ($category == 0) {
      $_SESSION['category'] = 'Buyer';
      header("Location: buyerpage.html");
      exit();
    }
}
  // print_r($data);
?>
