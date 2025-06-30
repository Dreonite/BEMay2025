<?php
$pagetitle = "Area of a Right Angle Triangle Calculator";
require_once("assets/header.php");
?>

<main class="container">
    <h1 class="text-primary text-center my-3">Area of a Right Angle Triangle Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="base" placeholder="Base" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Area" class="btn btn-success"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $area = 0.5 * $base * $height;
        echo "<p>Area of the Right Angle Triangle: $area</p>";
    }
    ?>
</main>
