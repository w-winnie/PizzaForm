<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment6</title>
        <link href="a6style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <?php
          if ($_POST["myOrder"]["error"] > 0)
          {
              echo "ERROR: ".$_POST["myOrder"]["error"];
          }
          else
          {
              echo "<h3> Hi ".$_POST["myFName"]." ".$_POST["myLName"]." your order is as follows: </h3>";
              echo "<p> Pizza: <span>".$_POST["pizza"]."</span></p>";
              echo "<p> Size: <span>".$_POST["size"]."</span></p>";
              $sub = $_POST["topping"];
              echo "<p> Toppings: <span>"; 
              foreach ($sub as $topping)
              {
                  echo $topping." ";
              }
              echo "</span></p>";
              echo "<p> Quantity: <span>".$_POST["quantity"]."</span></p>";
              
          }
          ?>
          
    </body>
</html>
