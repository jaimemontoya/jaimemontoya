<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$serverName = "jaimemontoya.database.windows.net"; // update me
	$connectionOptions = array(
        "Database" => "Finances", // update me
        "Uid" => "jaimemontoya", // update me
        "PWD" => "SuperEasy@1" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
	echo $conn;
	$c = new PDO("sqlsrv:Server=jaimemontoya.database.windows.net;Database=Finances", "jaimemontoya", "SuperEasy@1");
	
	//phpinfo();

	

    $tsql= "SELECT DayID, FullDateAlternateKey FROM DimDay ORDER BY DayID DESC";
    //$getResults= sqlsrv_query($conn, $tsql);
    /*echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['DayID'] . " " . $row['FullDateAlternateKey'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);*/
?>