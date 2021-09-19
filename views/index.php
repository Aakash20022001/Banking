<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jQuery.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/styles.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>Bank of Demo</title>
</head>

<body>
  <section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

      <div class="container-fluid">
      <img src="../images/logo2.png" alt="" width="100" height="40" class="d-inline-block align-text-top">

        <a class="navbar-brand" href="index.php">
          Bank of Demo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li><a class="nav-link scrollto active" href="customers.php">Customers</a></li>
            <li><a class="nav-link scrollto active" href="transfer.php">Transfer</a></li>
            <li><a class="nav-link scrollto active" href="history.php">Transaction History</a></li>

            <li><a class="nav-link scrollto active" href="about.php">About Us</a></li>

            <li><a class="nav-link scrollto active" href="contact.php">Contact Us</a></li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </section>
  <section class="sliding px-0 w-50 mx-auto  ">
    <div class="container-fluid">
      <div class="carousel slide carousel-fade " data-interval="2200" data-ride="carousel">
        <div class="carousel-inner first1" style=" margin-top:30px;">

          <div class="carousel-item active ">
            <img class=" d-block w-100 h-60 img-fluid  rounded" style="height:350px; width:450px;" src="../images/slide5.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block text-info ">
              <h1>Make Safe Payment</h1>
              <p>EASY TRANSACTIONS</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block  w-100 h-60 img-fluid   rounded" style="height:350px; width:450px;" src="../images/slide6.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block text-info">
              <h1>Transfer Funds Easily</h1>
              <p>NO NEED TO STAND IN QUEUE</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class=" d-block  w-100 h-60 img-fluid    rounded" style="height:350px; width:450px;" src="../images/slide7.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-info">
              <h1>Save Time</h1>
              <p>BY PAYING ONLINE BILLS</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class=" d-block  w-100 h-60 img-fluid    rounded" style="height:350px; width:450px;" src="../images/slide8.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-info">
              <h1>See Transaction History</h1>
              <p>NO BANK VISITING REQUIRED</p>
            </div>
          </div>
          <div class="carousel-item ">
            <img class=" d-block  w-100 h-60 img-fluid    rounded" style="height:350px; width:450px;" src="../images/slide9.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block text-info">
              <h1>Account Statement</h1>
              <p>CHECK ACCOUNT BALANCE ONLINE</p>
            </div>
          

        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </section>
  <main role="main">
    <div class=" py-5">

      <div class="container">
        <h3 class="section_title text-center mb-5 text-light text-capitalize">
          Our Services
        </h3>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow text-white bg-dark border border-white">
              <div class="inner bg-transparent">
                <img class="card-img-top" src="../images/customer6.png" data-holder-rendered="true" style="width:354px; height:200px;">
              </div>
              <div class="card-body card-transparent text-light">
                <h4 class="card-text" style="text-align: center; ">View all Customers</h4>

                <div class=" text-center">
                  <a href="customers.php" class="btn btn-warning text-light ">View all Customers</a>



                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow text-white bg-dark border border-white">
              <div class="inner">
                <img class="card-img-top" src="../images/money4.png" style="width:354px; height:200px;" data-holder-rendered="true">
              </div>
              <div class="card-body card-transparent">
                <h4 class="card-text" style="text-align: center;">Transfer Money</h4>

                <div class="text-center ">
                  <a href="transfer.php" class="btn btn-success  text-light">Click to Transfer
                  </a>
                </div>


              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow text-white bg-dark border border-white">
              <div class="inner">
                <img class="card-img-top" src="../images/history1.png" data-holder-rendered="true">
              </div>
              <div class="card-body card-transparent ">
                <h4 class="card-text" style="text-align: center;">Transaction History</h4>

                <div class="text-center">
                  <a href="history.php" class="btn btn-danger  text-light">See Transaction history
                  </a>


                </div>
              </div>
            </div>
          </div>


  </main>
  </section>
  </div>
  <section class="footer bg-dark">
    <div class="pl-5">
      <footer class="pt-4 md-5  border-top">
        <div class="row">

          <div class="col-6 col-md">
            <h3 class="pb-2 text-light">Company</h3>
            <ul class="list-unstyled text-small text-light">
              <li><a class="text-light" href="#">About US</a></li>
              <li><a class="text-light" href="#">Terms and conditions</a></li>
              <li><a class="text-light" href="#">Team feature</a></li>
              <li><a class="text-light" href="#">Stuff for developers</a></li>
              <li><a class="text-light" href="#">Privacy policy</a></li>

            </ul>
          </div>
          <div class="col-6 col-md">
            <h3 class="pb-2 text-light">Contact</h3>
            <ul class="list-unstyled text-small text-light">
              <li><a class="text-light" href="#">bankofdemo@gmail.com</a></li>
              <li><a class="text-light" href="#">+91-9823456722</a></li>
              <li><a class="text-light" href="#">+0731-22222</a></li>

            </ul>
          </div>
          <div class="col-6 col-md">
            <h3 class="pb-2 text-light">Tech support</h3>
            <ul class="list-unstyled text-small text-light">
              <li><a class="text-light" href="#">Installation Guide</a></li>
              <li><a class="text-light" href="#">see Tutorials</a></li>
              <li><a class="text-light" href="#">Activate</a></li>
              <li><a class="text-light" href="#">Contact support</a></li>
            </ul>
          </div>
        </div>
        <div class="border-top">
          <h6 class="text-center text-light mt-3">Copyright ©2021 All rights reserved
          </h6>
        </div>
      </footer>
    </div>
  </section>
</body>

</html>