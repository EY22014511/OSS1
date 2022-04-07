<?php	
    $id = $_GET['ID'];
    setcookie('ID', $id);
	// Connect to server and select database
    $servername = 'localhost';
    $db_name = 'Wk6_Database';
    $username = 'root';
    $password = '';

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_error())
    {
        echo "Unable to connect to MySQL..." . mysqli_connect_error();
    }

	$sql = "SELECT * from test where ID = $id ";

	// Execute query
    $result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action="Wk6 Ex2_3.php"  method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txtNumber value="<?php echo $row['phone_number'] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row['email'] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
    </br>
    <input type=submit name=btnsubmit value="delete"/>
</form>
</body>
</html>