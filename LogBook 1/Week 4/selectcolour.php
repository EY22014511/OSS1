<html>
  <head><title>Select colour</title></head>
    <body>
      <?php setcookie('selqty', $_POST['selqty']); ?>
      <?php session_start();?>
      <?php $_SESSION["selqty"] = $_POST["selqty"];?>
      <?php $_SESSION["selsize"] = $_POST["selsize"];?>
      <form action="confirmation.php"  method="post">
	Select widget colour: 
   	<select name="selcolour">
   	  <option>White</option>
	  <option>Red</option>
	  <option>Yellow</option>
	  <option>Green</option>
	  <option>Blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>
      </form>
   </body>
</html>