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
$query = "SELECT * FROM Survey";

/* check the sql statement for errors and if errors report them */
$stmt = OCIParse($connect, $query);
//echo "SQL: $query<br>";
if(!$stmt) {
echo "An error occurred in parsing the sql string.\n";
exit;
}
OCIExecute($stmt);?>

<br><br><br>
<h1>View Poll/Survey Informatiom</h1>
<div align="center">
<table >
<tr>
<td >First Name</td>
<td >Last Name</td>
<td >Satisfied with Service</td>
<td >Rating</td>
<td >Hear about us from</td>
</tr>


<?php

// Display all the values in the retrieved records, one record per row, in a loop
while(OCIFetch($stmt)) {
// Start a row for each record
echo("<tr >");
// Output fields, one per column
// FIRSTNAME value in column one
$fg1 = OCIResult($stmt,"FIRSTNAME"); //"FIRSTNAME";
echo("<td >");
echo ($fg1);
echo("</td>");
// LASTNAME value in column two
$fg2 = OCIResult($stmt,"LASTNAME"); //"LASTNAME";
echo("<td >");
echo ($fg2);
echo("</td>");
// SATISFIED value in column two
$fg3 = OCIResult($stmt,"SATISFIED"); //"SATISFIED";
echo("<td >");
echo ($fg3);
echo("</td>");

// SCALE value in column one
$fg4 = OCIResult($stmt,"SCALE"); //"SCALE";
echo("<td >");
echo ($fg4);
echo("</td>");
echo("</em></td>");
// ABOUT value in column one
$fg5 = OCIResult($stmt,"ABOUT"); //"ABOUT";
echo("<td >");
echo ($fg5);
echo("</td>");
echo("</em></td>");


// End the row
echo("</tr>");
}
// Close the connection
OCILogOff ($connect);
?>




</body>
</html>
