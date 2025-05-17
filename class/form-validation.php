<?php


    if (isset($_POST['name'], $_POST['phone'], $_POST['email'])) {

        // collect post variables
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];


        echo "<h2>Form submitted successfully!</h2>";
        echo "<p>Name: $name</p>";
  

      


$regex = '/^9[0-9]{9}$/';



if (preg_match($regex, $phone)) {
    echo "Phone number is valid";
} else {
    echo "<p>Phone number is invalid. It should be 10 digits long and start with 9.</p>";
}
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form  method="POST" action="form-validation.php"></form>
    <h1>Form Validation</h1>

    Name: <input type="text" name="name" required><br><br>
    Phone: <input type="tel" name="phone" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Submit</button>
</form>
</body>
</html>