<html>
 <head>
  <title>Size</title>
 </head>
 <body>
  <form  action="selectcolour.php" method="post">
   Selectwidget size:
   <select name="selsize">
		<option>S (£15.75)</option>
		<option>M (£16.75)</option>
		<option>L (£17.75)</option>
		<option>XL (£18.75)</option>
   </select>
   <br/><br/>	
   <input type="submit" value="Buy"/>
   <input type="hidden" name="selqty"
   value="<?php echo $_POST["selqty"]?>"/>
  </form>
 </body>
</html>