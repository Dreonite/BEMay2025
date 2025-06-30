<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/style.css"/> -->
    <title><?= $pagetitle ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="assets/raystore.png" alt="Raystore Logo" width="50px"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="simpleInterest.php">Simple Interest</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Calculators
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Volumeofcylinder.php">Volume of cylinder calculator</a></li>
                        <li><a class="dropdown-item" href="Volumeofsphere.php">Volume of sphere calculator</a></li>
                        <li><a class="dropdown-item" href="Lengthofhypotenuse.php">Length of hypotenuse calculator</a></li>
                        <li><a class="dropdown-item" href="Surfaceofacylinder.php">Surface area of cylinder calculator</a></li>
                        <li><a class="dropdown-item" href="Quadricequation.php">Quadratic equation solver</a></li>
                        <li><a class="dropdown-item" href="Areaoftrapezoid.php">Area of trapezoid calculator</a></li>
                        <li><a class="dropdown-item" href="TSAOAC.php">Total surface area of a cylinder calculator</a></li>
                        <li><a class="dropdown-item" href="Areaofarightangletriangle.php">Area of a right angle triangle calculator</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="LSAOAC.php">Lateral surface area of a cylinder calculator</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true"></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>