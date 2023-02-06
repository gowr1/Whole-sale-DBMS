<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
    <style>input[type=submit] {
    background-color: rgb(98, 79, 55);
    width: 100px;
    height: 50px;
    border-style: unset;
    border-radius: 10%;
    }</style>
<meta name="viewport" content="user-scalable=no,width=device-width"/>
<link rel="stylesheet" type="text/css" href="stylesp.css">

</head>
<body>
<div class="tot">    
<div class="container">
    <h1>Input your stocks</h1>
</div>	
</br>
<div class="row">
</br>
<form method="post" action="add_stock.php">
<br>
<fieldset id="f5">
    <label id="iname">Item Name</label></br>
    <select>
        <option selected name= "name" value=1>Shirts and Tees</option>
        <option name= "name" value=2>Pants and Jeans</option>
        <option name= "name" value=3>Dresses</option>
        <option name= "name" value=4>Shoes</option>
        <option name= "name" value=5>Sandals</option>
    </select>
    </br></br></br></br>
    <label id="qty">Quantity</label></br>
    <input type="text" placeholder="100" class="form-control" id="quantity" name="quantity">
    </br></br></br></br>
    <label id="up">Unit Price</label></br>
    <input type="text" class="form-control" id="price" name="price">
    </br></br></br></br>
    <label id="tp">Total Price</label></br>
    <input type="" id="totp" name="totp">
</fieldset>  
<br>
<input type="submit" id="trans" class="btn btn-success" value="Done">
</div>
</form>
</div>
</body>
</html>