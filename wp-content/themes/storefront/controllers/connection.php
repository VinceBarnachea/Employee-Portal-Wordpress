<?php
$dbhost = "localhost";
$dbuser = "emp_db_user";
$dbpass = "yNDPJZuhwUH-/IAF";
$dbname = "employee_portal";

// Attempt to connect to the database
global $con;
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check the connection
if (!$con) {
    // If the connection fails, output an error message and terminate the script
    die("Failed to connect: " . mysqli_connect_error());
}

// Define your custom table name


// SQL query to create the table
$tbl_user = "CREATE TABLE IF NOT EXISTS tbl_user (
    id INT NOT NULL AUTO_INCREMENT,
    user_level VARCHAR(255) NOT NULL,
    user_id VARCHAR(255) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";


// Execute the SQL query
if (mysqli_query($con, $tbl_user)) {
    // echo "Table $table_name created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

// The connection is successful, you can perform database operations here

// ...

// Close the database connection when done

?>