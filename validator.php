<h1>Validator</h1>
<?php
    echo $_SERVER['REQUEST_METHOD'] . "<br/>";
    $name = $_POST['person'];
    $age = $_POST['age'];
    echo "<p>$name is $age years old</p>";
?>