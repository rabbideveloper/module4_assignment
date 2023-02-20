<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Server and Client Information</title>
</head>
<body>
	
    <h1>Server and Client Information</h1>
    <?php
        // Display server information
        echo "<h2>Server Information: </h2>";
        echo "<ul>";
        echo "<li>Server Name: ". $_SERVER['SERVER_NAME']. "</li>";
        echo "<li>Server Host: ". $_SERVER['HTTP_HOST']. "</li>";
        echo "<li>Server Name: ". $_SERVER['SCRIPT_NAME']. "</li>";
        echo "<li>Server Port: ". $_SERVER['SERVER_PORT']. "</li>";
        echo "<li>Server Address: ". $_SERVER['REMOTE_ADDR']. "</li>";
        
    
    ?>

</body>
</html>