<?
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:cit410projectserver.database.windows.net,1433; Database = cit410-database", "username", "Password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rubenadmin@cit410projectserver", "pwd" => "Pssword", "Database" => "cit410-database", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cit410projectserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);



// write code below


?>
