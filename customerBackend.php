<?php
echo "<html><head><link rel='stylesheet' href='style.css' /></head><body>";

$shipping_choice = ($_POST['shipping'].value);
$orange = ($_POST['orange'].value);
$banana = ($_POST['banana'].value);
$guava = ($_POST['guava'].value);
$peach = ($_POST['peach'].value);
$strawberry = ($_POST['strawberry'].value);
$cherry = ($_POST['cherry'].value);

$total = 0;

$total += $shipping_choice;

echo "<h3 style='margin:0.5em;'><b>Reciept</b></h3>";
echo "<table style='width:20%;' border='1'>";
echo "<tr><th>Fruits: $" . $orange . "</th></tr>";
if($orange > 0) {
  $orange = $orange * 0.69;
  $total += $orange;
  echo "<tr><th>Orange Order: $" . $orange . "</th></tr>";
}
if($banana > 0) {
  $banana = $banana * 0.69;
  $total += $banana;
  echo "<tr><th>Banana Order: $" . $banana . "</th></tr>";
}
if($guava > 0) {
  $guava = $guava * 1.99;
  $total += $guava;
  echo "<tr><th>Guava Order: $" . $guava . "</th</tr>";
}
if($peach > 0) {
  $peach = $peach * 3.69;
  $total += $peach;
  echo "<tr><th>Peach Order: $" . $peach . "</th></tr>";
}
if($strawberry > 0) {
  $strawberry = $strawberry * 0.69;
  $total += $strawberry;
  echo "<tr><th>Strawberry Order: $" . $strawberry . "</th></tr>";
}
if($cherry > 0) {
  $cherry = $cherry * 0.69;
  $total += $cherry;
  echo "<tr><th>Cherry Order: $" . $cherry . "</th></tr>";
}

echo "<tr><th>Shipping: $" . $shipping . "</th></tr><tr><th>Total: $" . $total. "</th></tr>";
echo "</table>";
echo "<h3 style='margin:0.5em;'>Thank you for your order. Your order is being processed.</h3>";
echo "<button onclick='javascript:window.print();'>Print Reciept</button>";
echo "</html></body>";
?>
