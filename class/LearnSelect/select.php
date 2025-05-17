<?php




$con = mysqli_connect("localhost", "root", "", "testdb");

$sql = "SELECT * FROM simpleform WHERE id='2'";

if (!$con) {
    die("Connection Failed:" . mysqli_connect_error());
    echo "<hr>";
}

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No results found.";
}

mysqli_close($con);
