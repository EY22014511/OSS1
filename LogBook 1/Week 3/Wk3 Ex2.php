<?php
//age
 if ($_POST["txtage"] < 21 && $_POST["txtage"] >=0) 
 {
     echo "You are under 21 years old<br/>";
 }
 elseif ($_POST["txtage"] >=21 && $_POST["txtage"] < 150)
 {
     echo "You are 21 years old or over<br/>";
 }
 else{
     echo "Age must be between 0 and 149<br/>";
 }

 //gender
 if ($_POST["txtage"] == "Male" OR "male")
 {
     echo "You are a male";
 }
 elseif ($_POST["txtage"] == "Female" OR "female")
 {
     echo "You are a female";
 }
 else{
     echo "You idenitfy as neither male nor female";
 }
?>
