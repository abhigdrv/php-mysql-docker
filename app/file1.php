<?php
echo "Hi<br>";

// Database connection details
$servername = "db";
$username = "root";
$password = "root";
$dbname = "test";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error() . "<br>");
} else {
    echo "Connected successfully<br>";
}

// Select database
$db_selected = mysql_select_db($dbname, $conn);
if (!$db_selected) {
    die ("Cannot use $dbname : " . mysql_error() . "<br>");
}

// SQL query
$sql = "SELECT test FROM test LIMIT 1";
$result = mysql_query($sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysql_error() . "<br>");
} else {
    echo "Query executed successfully<br>";
}

// Process results
if (mysql_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysql_fetch_assoc($result)) {
        echo "Row data: " . $row["test"] . "<br>";
    }
} else {
    echo "0 results<br>";
}

// Close connection
mysql_close($conn);

echo "running<br>";
?>
