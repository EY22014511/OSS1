<?php     
     $connect = mysqli_connect("localhost", "root", "", "Wk6_Database");
     if (isset($_POST["selweek"]))
     {
        $sql = "select * from lotto where wk=$_POST[selweek];";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);
 
        echo "Number 1 is  $row[number1]<br/>"; 
        echo "Number 2 is  $row[number2]<br/>"; 
        echo "Number 3 is  $row[number3]<br/>"; 
        echo "Number 4 is  $row[number4]<br/>"; 
        echo "Number 5 is  $row[number5]<br/>"; 
        echo "Number 6 is  $row[number6]<br/>"; 
      }
      else {
        $sql = "select * from lotto;";
        $result = mysqli_query($connect, $sql);
 
        echo "<form action='$_SERVER[PHP_SELF]' method='post' >";
        echo "<br/>Select the lottery week ";
        echo "<select name='selweek' >";
        while($row = mysqli_fetch_array($result)) {
         echo "<option value='$row[wk]'>$row[wk]</option>";
        }
        echo "</select><br/>";
        echo "<input type='submit' value='Select' />";
        echo "</form>";
      }
      mysqli_close($connect);
 ?>