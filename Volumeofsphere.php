<?php
$pagetitle = "Volume of a Sphere Calculator";
require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-primary text-center my-3">Volume of a Sphere Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="radius" placeholder="Radius" required class="form-control"/>
        <input type="submit" value="Calculate Volume" class="btn btn-primary"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $radius = $_POST['radius'];
        $volume = (4/3) * pi() * pow($radius, 3);
        echo "<p>Volume: $volume</p>";
    }
    ?>
</main>