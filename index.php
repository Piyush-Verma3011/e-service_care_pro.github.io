<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-ServiceCare Pro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand mx-3">E-ServiceCare Pro</a>
        <span class="navbar-text mx-3">Customer's Happiness is our Aim! &nbsp &nbsp</span>
        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myMenu">

            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#contactus" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    
    <header class="jumbotron back-image" style= "background-image:url(images/me.png);"><br><br>
      
    <div class="myClass mainHeading">
        <h1 class="text-uppercase text-danger fw-bold mx-3">
            Welcome to E-ServiceCare Pro
        </h1>
        <p class="fst-italic mx-3">
            Customer's Happiness is our Aim!
        </p>
        <a href="RequesterLogin.php" class="btn btn-success mr-4 mx-3">Login</a>
        <a href="#registration" class="btn btn-danger mr-4 mx-3">Sign Up</a>
    </div>

    </header>
    
    <br><br>
    <div class="container text-center">
    <div class="jumbotron" style="background-color: lightgray">
        <h3 class="text-center">OSMS Services</h3>
        <P>"We, at OSMS Services, stand as India's premier network of multi-brand electronic and electrical service centers, offering a comprehensive spectrum of services. Our core focus is to elevate your user experience through the provision of top-notch electronic appliance maintenance services. Our overarching mission is to deliver electronic appliance care services that ensure your devices remain in optimal condition, keeping our customers content and beaming."Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto libero dolor accusamus, voluptas ad saepe, culpa sint tempora incidunt repellat, tenetur eligendi magni obcaecati soluta. Facilis voluptates ea quis minima explicabo placeat rem eaque ducimus, laboriosam cumque non, dignissimos, quisquam voluptatem animi? Exercitationem temporibus deserunt inventore adipisci, quos mollitia tenetur minima aliquid incidunt debitis doloribus?""
        </P>
        </div>
    </div>
</div><br><br>
   


<div class="container text-center border-bottom" id="Services"><br><br><br><br>
    <h2>
        Our Services
    </h2>
    <div class="row mt-4">
    <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
        </div> 

        
    <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
        </div>

        
    <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
        </div>    

    </div>
</div>



<?php include('UserRegistration.php')
?>



<div class="jumbotron bg-danger"> 
    <div class="container">
        <br><h2 class="text-center text-white">Happy Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avt1.png" class="img-fluid" style="border-radius:100px;"alt="avt1">
                        <h4 class="card-title">Aryan</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore magnam maxime autem? Nostrum maiores magni dolores mollitia, voluptatibus et animi?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avt2.png" class="img-fluid" style="border-radius:100px;"alt="avt2">
                        <h4 class="card-title">Sanskriti</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore magnam maxime autem? Nostrum maiores magni dolores mollitia, voluptatibus et animi?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avt3.png" class="img-fluid" style="border-radius:100px;"alt="avt3">
                        <h4 class="card-title">Harshit</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore magnam maxime autem? Nostrum maiores magni dolores mollitia, voluptatibus et animi? Lorem ipsum do.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avt1.png" class="img-fluid" style="border-radius:100px;"alt="avt1">
                        <h4 class="card-title">Adarsh</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore magnam maxime autem? Nostrum maiores magni dolores mollitia, voluptatibus et animi?</p>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>


<br><br>
<div class="container" id="contactus">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
        
          <?php include('contactform.php')?>

         <div class="col-md-4 text-center">
            <strong>
                Headquarter:
            </strong><br> OMS pvt Ltd,<br>
             Crossing Republic,Ghaziabad<br>
             Uttar Pradesh -201016<br><br>
             <strong>
                Phone no.:
            </strong><br>8887844474<br>
            <br><br>
            <strong>
                Branch:
            </strong><br> OMS pvt Ltd, <br>Kalyanpur,Kanpur<br>
            Uttar Pradesh -200300<br><br>
             <br>



         </div>



    </div>
</div>


<div class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6">
                <span class="pr-2">
                    Follow Us:
                </span>&nbsp;
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>&nbsp;
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>&nbsp;
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>&nbsp;
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google"></i></a>&nbsp;
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
            </div>
            <div class="col-md-6" style="text-align: right;">
                  <small>
                    Designed By :- Piyush Verma &copy;2023
                  </small>
                  <small class="ml-2">
                    <a href="admin/login.php">Admin Login</a>
                  </small>
            </div>
        </div>
    </div>
</div>



    <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/all.min.js"></script>
</body>
</html>
