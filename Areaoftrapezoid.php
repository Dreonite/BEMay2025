<?php
$pagetitle = "Area of Trapezoid Calculator";
require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-primary text-center my-3">Area of Trapezoid Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="base1" placeholder="Base 1" required class="form-control"/>
        <input type="number" name="base2" placeholder="Base 2" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Area" class="btn btn-dark"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base1 = $_POST['base1'];
        $base2 = $_POST['base2'];
        $height = $_POST['height'];
        $area = 0.5 * ($base1 + $base2) * $height;
        echo "<p>Area: $area</p>";
    }
    ?>
</main>
