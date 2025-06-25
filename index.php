<?php
$pagetitle = "Home Page";
require_once("assets/header.php");

# dsfhdsfdskh
/*
    
    */
// echo "<h1>Hello World</h1>", 1;
// print "<h1>Hello World</h1>";
// var_dump("<h1>Hello World</h1>");
// print_r("<h1>Hello World</h1>");

// // // Datatypes
// // integer
// $num1 = 20;
// echo $num1, gettype($num1), "<br/>";
// // float
// $num2 = 20.5;
// echo $num2, gettype($num2);
// // // Refrencing variable
// $x = 10;
// $y = &$x;
// echo $x . "<br/>";
// echo $y . "<br/>";
// $x = 20;
// echo $x . "<br/>";
// echo $y . "<br/>";

// // // Constant
// define("NUM", 200);
// echo NUM . "<br/>";

// const NUM2 = 500;
// echo NUM2;

// // string
// $name = "John";
// echo "Hello $name";
// boolean
// array
// $students = [
//     "Brian",
//     "Mark",
//     "Tobby",
//     "Rihanat",
//     "Tumike",
//     "Chris"
// ];
// echo $students[0] . "<br/>";
// echo "<pre>";
// var_dump($students);
// echo "</pre>";
// echo gettype($students);

// $person = [
//     "firstname" => "John",
//     "lastname" => "Doe",
//     "age" => 30,
//     "city" => "New York",
// ];

// echo "<pre>";
// print_r($person);
// echo "</pre>";
// echo gettype($person);
// null

// foreach($person as $value) {
//     echo $value . "<br/>";
// }

// foreach($person as $key => $value) {
//     echo $key . ", $value" . "<br/>";
// }

// $x = "John Doe";
// // echo $x;
// function greet() {
//     global $x;
//     echo "Hello " . $x;
// }

// greet();

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];
// echo $_SERVER['REQUEST_METHOD'] . "<br/>";
// echo $_GET['firstname'];
?>
<h1>Home page</h1>

<form action="validator.php" method="post" class="form container border border-dark-subtle rounded-3 py-3">
    <input type="text" name="person" class="form-control">
    <input type="text" name="age">
    <input type="submit" value="Submit">
</form>

</body>

</html>