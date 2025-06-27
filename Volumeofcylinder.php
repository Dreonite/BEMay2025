<?php
$pagetitle = "Volume of Cylinder Calculator";
require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-primary text-center my-3">Volume of Cylinder Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Volume" class="btn btn-info"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "<p>Volume: $volume</p>";
    }
    ?>