<?php
$Pagetitle = "Total surface area of a cylinder calculator";
require_once("assets/header.php");
?>

<main class="container">
    <h1 class="text-primary text-center my-3">Total Surface Area of a Cylinder Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Total Surface Area" class="btn btn-warning"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $height = $_POST['height'];
        $totalSurfaceArea = 2 * pi() * $radius * ($radius + $height);
        echo "<p>Total Surface Area of the Cylinder: $totalSurfaceArea</p>";
    }
    ?>
</main>