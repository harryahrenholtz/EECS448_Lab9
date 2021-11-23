<?php

$user = $_POST["email"];
$pass = $_POST["password"];

$shiptype = $_POST["ship"];
$ship_price=0;

if($shiptype == "Standard")
{
	$ship_price = 0;
}
else if($shiptype == "Overnight")
{
	$ship_price = 50;
}
else
{
	$ship_price = 5;
}

$q1 = $_POST["tetQ"];
$q2 = $_POST["ozarkQ"];
$q3 = $_POST["yellowQ"];

$st1 = $q1 * 39.99;
$st2 = $q2 * 40.99;
$st3 = $q3 * 69.99;

echo "<h2>Welcome Customer</h2><br>";
echo "<p>Username: " . $user . "<br>";
echo "Password: " . $pass . "</p><br><br>";
echo '<link href="style.css" rel="stylesheet" type="text/css"/>';
echo "<table>";
echo "<tr> <th></th> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th></tr>";
echo "<tr> <th>Grand Tetons Picture</th> <td>" . $q1 . "</td> <td>$39.99</td> <td>$" . $st1 . "</td> </tr>";
echo "<tr> <th>Ozarks Picture</th> <td>" . $q2 . "</td> <td>$40.99</td> <td>$" . $st2 . "</td> </tr>";
echo "<tr> <th>Yellowstone Picture</th> <td>" . $q3 ."</td> <td>$69.99</td> <td>$" . $st3 . "</td> </tr>";
echo '<tr> <th>Shipping</th> <td colspan="2">' . $shiptype . "</td><td>$" . $ship_price . "</td></tr>" ;
echo '<tr> <th colspan="3">Total Cost</th> <th>$' . ($st1+$st2+$st3+$ship_price) . "</th> </tr>";
echo "</table>";

?>
