<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include 'header.php'; ?>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="controller/customer_data.php" class="nav-link ">Customer Data</a>
            </li>
            <li class="nav-item">
                <a href="controller/statistics.php" class="nav-link font-style2">Statistical Data</a>
            </li>
            <li class="nav-item">
                <a href="controller/product_catalog.php" class="nav-link font-style2">Product Catalog</a>
            </li>

        </ul>

    </div>
</nav>


    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>