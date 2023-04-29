<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php echo '<link href="css/style.css" rel="stylesheet">'; ?>
    </head>
    <body>
        <header>
            <?php include 'header.php'; ?>
        </header>
        <main>
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
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
            </nav>
            <img class="img-section" src="images/background.jpg" alt="background">
            <div class="main-section" style="justify-content: flex-end;">
                <div class="card mb-3" style="width: 30rem;">
                    <div class="card-body">
                      <h3>Welcome to a bank that cares.</h3> 
                      <h3>Discover personalized solutions and superior service - all in one place.</h3>
                      <h3>Join us and experience the difference today!</h3>
                    </div>
                </div>    
            </div>
            <div class="main-section" style="background-color:#f4f4f4;">
                <div class="card mb-3" style="width: 40rem;">
                    <div class="card-body">
                      <h5 class="card-title">CD Specials</h5>
                      <p class="card-text" style="font-size: xx-large;">Lock in your CD rate - up to 4.70%* Annual Percentage Yield.</p>
                      <p class="card-text">Earn a guaranteed return. Rates are dependent on location and term.</p>
                      <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 40rem;">
                    <div class="card-body">
                      <h5 class="card-title">Savings Accounts</h5>
                      <p class="card-text">Save for something great.</p>
                      <p class="card-text">Find the best account to help make your goals a reality.</p>
                      <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 40rem;">
                    <div class="card-body">
                      <h5 class="card-title">Savings 101</h5>
                      <p class="card-text">Make your money work harder for you.</p>
                      <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 40rem;">
                    <div class="card-body">
                      <h5 class="card-title">Make an appointment</h5>
                      <p class="card-text">We're here to help - virtually, by phone or in person.</p>
                      <a href="#" class="btn btn-primary">Schedule now</a>
                    </div>
                </div>
            </div>
            <div class="loan-section-header" style="background-color:#f4f4f4">
                <p style="color: #0d6efd; font-size: xx-large; font-weight: 500;">Borrowing money is a big deal. We're ready to help.</p>
                <p style="font-size: medium;">From calculators and rate charts to get you started, to experienced loan officers and bankers, VBank has answers for all your loan and mortgage questions.</p>
            </div>
            <div class="loan-section" style="background-color:#f4f4f4">
                <div class="card mb-3" style="width: 20rem;">
                    <img class="card-img-top" src="images/house_loan.jpg" alt="House loan">
                    <div class="card-body">
                      <h5 class="card-title">Home mortgage</h5>
                      <a href="#">Learn more ></a><br>
                      <a href="#">Book appointment ></a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 20rem;">
                    <img class="card-img-top" src="images/auto_loan.jpg" alt="Auto loan" style="height: 212px;">
                    <div class="card-body">
                      <h5 class="card-title">Auto loan</h5>
                      <a href="#">Learn more ></a><br>
                      <a href="#">Book appointment ></a>
                    </div>
                </div>
                <div class="card mb-3" style="width: 20rem;">
                    <img class="card-img-top" src="images/home_equity.jpg" alt="Home equity" style="height: 212px;">
                    <div class="card-body">
                      <h5 class="card-title">Home equity line of credit</h5>
                      <a href="#">Learn more ></a><br>
                      <a href="#">Book appointment ></a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </body>
</html>