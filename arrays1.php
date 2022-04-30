<html>

  <head>
       <title> array  </title>
</head>
<body>

    <?php

     $mycars = array("Toyota","Nissan","Kia","Mazda");

     echo $mycars[0];

    ?>
    <br>

    <?php
       
      print_r($mycars);
 
    ?>

    <br>

    <?php
   
     $mycars[4] = "susuki";

     $mycars[] = "Mitsubishi";

     $mycars[3] = "Honda";


    ?>

    <br>

    <h3> After </h3>
    <?php print_r($mycars); ?>


</body>


</html>