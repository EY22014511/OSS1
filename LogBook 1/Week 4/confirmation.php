<?php
session_start();
   echo "<h2> Quantity: {$_SESSION["selqty"]} </h2></br>";
   echo "<h2> Colour: {$_POST["selcolour"]}</h2>";
   
   //hidden
   if(isset($_POST['selqty']) && isset($_POST['selcolour'])){
   $qty = $_POST['selqty'];
   $colour = $_POST['selcolour'];   
   }

   //cookie
   if(isset($_COOKIE['selqty']) && isset($_POST['selcolour'])){
   $qty = $_COOKIE['selqty'];
   $colour = $_POST['selcolour'];   
   }


   if($_POST)
   {
      $selqty = $_SESSION["selqty"];
      $selsize = $_SESSION["selsize"];
      
      if($_SESSION["selsize"] == "S (£15.75)")
      {
         $total = $selqty * 15.75;
      }
      else if ($_SESSION["selsize"] == "M (£16.75)")
      {
         $total = $selqty * 16.75;
      }
      else if ($_SESSION["selsize"] == "L (£17.75)")
      {
         $total = $selqty * 17.75;
      }
      else if ($_SESSION["selsize"] == "XL (£18.75)")
      {
         $total = $selqty * 18.75;
      }

      else
      {
         echo "Price Unavailable!";
      }
      echo ("<h2>Total Price: £$total</h2>");
   }
?>