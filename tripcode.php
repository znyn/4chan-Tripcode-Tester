<html>
<head>
<title>Tripcode Tester</title>
<link rel="stylesheet" href="style.css">
<h1 class="header">Tripcode Tester</h1>
<br>
</head>
<body>
<p style="font-family: verdana;">Output:</p>
<?php
// Generates a random number for the post number between 11,000 and 99,000
$postnumber = rand(11111,999999);
$min = rand(10,59);
$hour = rand(10,23);
function tripcode($plain)
{
    $salt = substr($plain."H.",1,2);
    $salt = preg_replace("[^\.-z]",".",$salt);
    $salt = strtr($salt,":;<=>?@[\\]^_`","ABCDEFGabcdef"); 
    return substr(crypt($plain,$salt),-10);
}
// Beginning of the post CSS
echo '<div class="wrap"><div class="post"><b><span style="color: green;">';
// The name
echo 'Anonymous' . '</b>';
// This displays the tripcode and the style
echo '<span style="color: green;">!' . tripcode($_POST["tripcode"]) . '</span>';
// This displays the date and random post number
echo '<span style="color: #800000;"> 10/10/03(Fri)' . $hour . ':' . $min . ' <a href="#">No.</a><a href="#">' . $postnumber . '</a><br><br>';
// The text inside the post
echo 'This is a tripcode test.' . '</span></div>';

?>
<br>
<p><a href="index.html" style="color: blue; font-family: verdana;"><u>Want to try again?</u></a></p>
</body>
</html>
