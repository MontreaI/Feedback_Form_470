<!DOCTYPE HTL>
<html>
<head>
<title>Forms</title>
</head>
<body>
<p>Your ID is: 
<?php
$ID = $_POST["ID"];
echo $ID;
?>
<br></p>
<p> You wrote: 
<?php
$FB = $_POST["FB"];
echo $FB;
?>
<br></p>
</body>
</html>