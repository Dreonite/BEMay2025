<?php
$Pagetitle = "Lateral surface area of a cuboid calculator";
require_once("assets/header.php");
?>

<main class="container">
    <h1 class="text-primary text-center my-3">Lateral Surface Area of a Cuboid Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="length" placeholder="Length" required class="form-control"/>
        <input type="number" name="width" placeholder="Width" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Lateral Surface Area" class="btn btn-danger"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $height = $_POST['height'];
        $lateralSurfaceArea = 2 * ($length + $width) * $height;
        echo "<p>Lateral Surface Area of the Cuboid: $lateralSurfaceArea</p>";
    }
    ?>
</main>