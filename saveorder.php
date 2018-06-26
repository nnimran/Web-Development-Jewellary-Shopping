<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!--SIT774 : Web Technologies and Development
STUDENT ID : 215219447
STUDENT NAME : Neha Nimran
Assignment 2 -->

<html>
<head>
  <title>SearchProduct</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<div class="container">

<header id="logo1">
    <img src="img/Logo.jpg">
    <h1>Ranka Jewellers</h1>
</header>

<nav>
    <ul class="top-nav" id="mytopnav">
    <li><a class="active" href="index.html">Home</a></li>
    <li><a class="active" href="Product.html">Products</a></li>
    <li><a class="active" href="Service.html">Service</a></li>
    <li><a class="active" href="order.html">Order</a></li>
    <li><a class="active" href="survey.html" target="_blank">Poll</a></li>
    <li><a class="active" href="Contact.html">Contact Us</a></li>
    <li><a class="active" href="Query.html">Query</a></li>
    <li><a class="active" href="admin.html" target="_blank">Administration</a></li>
  </ul>
</nav>
</div>
<?php

/* Set oracle user login and password info */
$dbuser = "nnimran"; /* your deakin login */
$dbpass = "Neha123"; /* your oracle access password */
$db = "SSID";
$connect = OCILogon($dbuser, $dbpass, $db);

if (!$connect) {
echo "An error occurred connecting to the database";
exit;
}

/* build sql statement using form data */
$query = "INSERT INTO Orders(FIRSTNAME,LASTNAME,PS,PAYMENTMETHOD,PAYMENTAMOUNT,PAYMENTADDRESS) VALUES ('$firstname','$lastname','$ps','$Paymentmethod',$Paymentamount,'$Paymentaddress')";

/* check the sql statement for errors and if errors report them */
$stmt = OCIParse($connect, $query);

if(!$stmt) {
echo "An error occurred in parsing the sql string.\n";
exit;
}
OCIExecute($stmt);
?>


<br><br><br>
<h1>Order Submitted successfully!!!</h1>

</body>
</html>
