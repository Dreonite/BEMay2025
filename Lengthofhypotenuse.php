<?php
$pagetitle = "Length of Hypotenuse Calculator";
require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-primary text-center my-3">Length of Hypotenuse Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="base" placeholder="Base" required class="form-control"/>
        <input type="number" name="height" placeholder="Height" required class="form-control"/>
        <input type="submit" value="Calculate Length" class="btn btn-warning"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $base = $_POST['base'];
        $height = $_POST['height'];
        $hypotenuse = sqrt(pow($base, 2) + pow($height, 2));
        echo "<p>Length of Hypotenuse: $hypotenuse</p>";
    }
    ?>
</main>