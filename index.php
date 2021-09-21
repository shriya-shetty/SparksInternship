<?php
    include 'link.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Home Page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg d-flex" style="background-color:#753422;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assests/img/logo.png" alt=""></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-evenly" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#services">Services</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="container-fluid row">
            <div class="col-md-4 my-auto" >
                <h4>Banking System is a very big bank where a people can do online transactions and also see the customer details</h4>
                <button type="button" class="btn btn-primary" href="#services">Our Services</button>
            </div>
            <div class="col-md-8 my-auto" >
                <img src="assests/img/banner.png" class="d-block w-100 mt-4" alt="...">
            </div>
        </div>
    </div>
    <div class="container m-5" id="about">
        <div class="heading">
            <h1><span>About Us</span></h1>
        </div>
        <div class="row">
            <div class="col-md-6 my-auto">
                <h4 class="h4">Banking System is a simple banking System where you can see customers and can transact money to multiple accounts.... <button type="button" href="#about" class="btn btn-primary m-2">Read More</button></h4>
            </div>
            <div class="col-md-6">
                <img src="assests/img/about.jpg" class="d-block w-100 me-3" alt="">
            </div>
        </div>
    </div>
    <div class="container" id="services">
        <div class="heading">
            <h1><span>Our Services</span></h1>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <img src="assests/img/customers.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">View Customers</h5>
                        <p class="card-text">View the Customer Details that are saved in the bank.</p>
                        <a href="customer.php" class="btn btn-primary">Customers List</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-auto">
                <div class="card">
                    <img src="assests/img/transaction.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Money Transactions</h5>
                        <p class="card-text">Tranfer money to any account.</p>
                        <a href="transaction.php?from_email=&id=" class="btn btn-primary">Transfer Cash</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container" id="contact">
        <div class="heading">
            <h1><span>Contact Us</span></h1>
        </div>
        <div class="row m-3">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
            </div>
        </div>
        <div class="form-group m-4">
            <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group m-4">
            <input type="text" class="form-control" placeholder="Subject">
        </div>
        <div class="form-group m-4">
            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary ms-4" onClick="contact()">Submit</button>
    </div>
    <footer class="sticky-footer bg-dark">
    <div class="container text-center text-md-left mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto mb-4 mt-3">
                <h5 class="text-uppercase"><img src="assests/img/logo.png"></h5>
                <p class="mt-2">We are a group of living together and celebrating happiness and sadness.We celebrate different occasions with full of enthusiam and joy.A place you can call it home.</p>
            </div>
            <div class="col-md-3 mx-auto mb-4 mt-3">
                <h5 class="text-uppercase font-weight-bold">Pages</h5>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width:85px; height:2px;">
                <ul class="list-unstyled">
                    <li class="my-2">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="my-2">
                        <a href="#about">About</a>
                    </li>
                    <li class="my-2">
                        <a href="#services">Service</a>
                    </li>
                    <li class="my-2">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mx-auto mb-4 mt-3">
                <h5 class="text-uppercase font-weight-bold">Contact</h5>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width:90px; height:2px;">
                <ul class="list-unstyled">
                    <li class="my-2">
                        <i class="fas fa-home"></i> Mumbai,India
                    </li>
                    <li class="my-2">
                        <i class="fas fa-phone"></i> +91-4567896542
                    </li>
                    <li class="my-2">
                        <i class="far fa-envelope"></i> abcdef@gmail.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
    <p>&copy; 2021 Copyright 
        Shriya Shetty</p>
    </div>
</footer>
    <script src="assests/js/click.js"></script>
</body>
</html>