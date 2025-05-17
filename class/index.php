<?php
// tentative practises done in class

// Variable declaration and data types
$name = "R.a.mon";
$age = 22;
$height = 5.7;
$isStudent = true;

// Echo variables
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height feet<br>";
echo "Is Student? " . ($isStudent ? "Yes" : "No") . "<br><br>";


//Arrays

// Single-dimensional array
$skills = array("PHP", "JavaScript", "HTML", "CSS");

print_r($skills);

echo "<br>";



// Display array elements
echo "Skills:<br>";

foreach ($skills as $item) {
    echo $item . "<br>";
}

echo "<br>";


// functions (user defined)

function printhere()
{
    echo "The function is called";
}
printhere();

// User defined functions with arguments

echo "<br>";
function add($a, $b)
{
    echo "The sum of $a and $b is" . " " . $a + $b;
}

echo "<br>";

$name = "The name is John cena! ";
function displayname()
{
    global $name;
    echo $name;
}
displayname();

echo "<br>";



add(1, 2);
