<html>

  <head>
      <title> arrays</title>
</head>

<body>

<?php 

$mycars = array(10,20,30,"Toyota","Nissan",array("black","white","blue"),"Kia","Mazda");

?>

<br>

<?php 

  print_r($mycars);

?>

<br>

<?php

  $mycars[5][1] = "red";


?>

<h3> After </h3>

<?php 

print_r($mycars);

?>


</body>


</html>