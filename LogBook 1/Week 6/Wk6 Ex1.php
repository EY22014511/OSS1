<?php
	$servername = 'localhost';
    $db_name = 'Wk6_Database';
    $username = 'root';
    $password = '';

    $sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtNumber]')";

	// Connect to server and select database



    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_errno())
    {
        echo "Unable to connect to MySQL..." . mysqli_connect_errno();
        exit();
    }

	// Execute sql statement	
    $result = mysqli_query($connect,$sql);

    if($result)
    {
        echo"Record Updated...<br/>";
    }
    else
    {
        echo"Error..." . mysqli_error($connect);
    }

	$sql = "SELECT * from test";
	
	// Execute sql statement
    $result = mysqli_query($connect,$sql);

	if($result)
    {
        while ($row = mysqli_fetch_assoc($result))
	    {
		    echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	    }
    }
    else
    {
        echo "Error Fetching Data...";
    }
	
?>