<?php
$pagetitle = "Quadratic Equation Solver";
require_once("assets/header.php");
?>
<main class="container">
    <h1 class="text-primary text-center my-3">Quadratic Equation Calculator</h1>
    <form method="post" class="d-flex flex-column gap-3 p-5">
        <input type="number" name="a" placeholder="Coefficient a" required class="form-control"/>
        <input type="number" name="b" placeholder="Coefficient b" required class="form-control"/>
        <input type="number" name="c" placeholder="Coefficient c" required class="form-control"/>
        <input type="submit" value="Solve Quadratic Equation" class="btn btn-success"/>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        $discriminant = pow($b, 2) - 4 * $a * $c;
        
        if ($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            echo "<p>Roots are real and different: $root1 and $root2</p>";
        } elseif ($discriminant == 0) {
            $root = -$b / (2 * $a);
            echo "<p>Roots are real and the same: $root</p>";
        } else {
            echo "<p>Roots are complex and different.</p>";
        }
    }
    ?>
</main>
