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


    $tbl_emp = "CREATE TABLE IF NOT EXISTS tbl_emp (
        id INT NOT NULL AUTO_INCREMENT,
        user_level VARCHAR(255) NOT NULL,
        user_id VARCHAR(255) NOT NULL,
        user_pass VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        first_name VARCHAR(255) NOT NULL,
        middle_name VARCHAR(255) NOT NULL,
        position VARCHAR(255) NOT NULL,
        gender VARCHAR(255) NOT NULL,
        date_hired VARCHAR(255) NOT NULL,
        emp_status VARCHAR(255) NOT NULL,
        birthdate VARCHAR(255) NOT NULL,
        age VARCHAR(255) NOT NULL,
        contact_no VARCHAR(255) NOT NULL,
        residence VARCHAR(255) NOT NULL,
        skype_id VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    )";

    // $sqlInsert = "INSERT INTO tbl_emp (user_level, user_id, user_pass, last_name, first_name,
    // middle_name, position, gender, date_hired, emp_status, birthdate, age, contact_no, residence,
    // skype_id, email) VALUES ('user','emp','pass','Barnachea','John Vincent','Tolen',
    // 'Junior Web Developer','Male','04-20-2022','Regular','09-04-2000','24','09950990191','Tanza','live:id','vincent.barnachea@a2designlab.com');";

    // mysqli_query($con,$sqlInsert);
// Execute the SQL query
if (mysqli_query($con, $tbl_emp)) {
    // echo "Table $table_name created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


// The connection is successful, you can perform database operations here

// ...

// Close the database connection when done

?>