<?php
//$transaction_id = $_GET['transaction_id'];
?>
<style>
    .transaction-details {
      padding-top: 100px;
      width: 500px;
      margin: 0 auto;
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .header {
      font-size: 40px;
      font-weight: bold;
      margin-bottom: 40px;
    }
    body {
      background: rgba(221, 199, 160, 0.3);
    }
    
    table {
      margin: 0 auto;
      border-collapse: collapse;
    }
    
    tr:hover {background-color: coral;}
    
    td {
      border-bottom: 1px solid #ddd;
      
      padding: 20px;
      width: 100%;
    }
    a{
        text-decoration: none;
        color:#000000;
    }
    button{
        background-color: coral;
        width: 100px;
        height: 50px;
        
    }
    </style>
    <head><title>Transaction</title></head>
    <div class="transaction-details">
      <div class="header">Transaction Details</div>
     
      <table>
    
        <tr>
          <td><strong>Transaction ID</strong></td>
          <td>123456</td>
        </tr>
        <tr>
          <td><strong>Date</strong></td>
          <td>02/03/2023</td>
        </tr>
        <tr>
        <tr>
          <td><strong>Product Id</strong></td>
          <td>productid</td>
        </tr>
        <tr>
          <td><strong>Quantity</strong></td>
          <td>quantity</td>
        </tr>
    
          <td><strong>Total Amount</strong></td>
          <td>RS 100.00</td>
        </tr>
        <tr>
          <td><strong>Payment Status</strong></td>
          <td>Successful</td>
        </tr>
      </table>
    </br>
      <button><a href="invoice.html">Print Receipt</a></button>
    </div>