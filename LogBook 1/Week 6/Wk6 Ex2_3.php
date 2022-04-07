<?php
    // Connect to server and select database
    $servername = 'localhost';
    $db_name = 'Wk6_Database';
    $username = 'root';
    $password = '';

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_errno())
    {
        echo "Unable to connect to MySQL..." . mysqli_connect_error();
    }

    if($_POST['btnsubmit'] == "save")
    {
        $sql = "UPDATE test set phone_number = '{$_POST["txtNumber"]}', email = '{$_POST["txtemail"]}' where ID = '{$_COOKIE["id"]}'";
    }

    if($_POST['btnsubmit'] == "delete")
    {
        $sql = "DELETE from test where ID = '{$_COOKIE["id"]}'";
    }

    $result = mysqli_query($connect, $sql);
    if($result)
    {
        echo "<script>window.location = 'http://localhost/LogBook%201/Week%206/Wk6%20Ex2.php'</script>";
    }
    else
    {
        echo "Error occured when updating the record: " . mysqli_error($connect);
    }




?>