<?php
      include_once "includes/vehicle-class.php";
      include_once "includes/truck-class.php";
      include_once "includes/bicycle-class.php";
      include_once "includes/car-class.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
      <head>
            <meta charset="utf-8">
            <title>Assignment BE.3.0</title>
      </head>
      <body>

      <header>
            <h1>Assignment BE.0.1</h1>
            <h3>Drilon Braha, 12-09-2018</h3>
      </header>

            <?php
                  $vehicle1 = new Vehicle('Mercedes', 'White', 'Sarah');
                  printf("<p>%s</p>\n", $vehicle1);

                  $vehicle2 = new Truck('Volvo', 'Pink', 'Cars', 16);
                  printf("<p>%s</p>\n", $vehicle2);

                  $vehicle3 = new Bicycle('Bike', 'Red', 'Thomas');
                  printf("<p>%s</p>\n", $vehicle3);

                  $vehicle4 = new Car('BMW', 'Black', 'Spencer', 4, FALSE);
                  printf("<p>%s</p>\n", $vehicle4);
            ?>


      </body>
</html>
