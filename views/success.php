<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
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
    <div class="container ">
        <div class="card card-center bg-light text-dark" style="
        margin: 40px auto; 
        float: none;
        margin-bottom: 40px; 
        width: 40rem;">
            <div class="card-body text-center">
                <div class="main">
                    <h1>Transaction SuccessFull</h1>
                    <h2>Thank you for using Bank Of Demo</h2>
                    <img src="../images/success3.png">
                </div>
                <div class="text-center pb-2">
                    <a href="history.php" class="btn btn-primary">
                        <i class="fa fa-check mr-2"></i>Transaction History
                    </a>
                    <a href="index.php" class="btn btn-primary">
                        <i class="fa fa-check mr-2"></i>Back to Home Page
                    </a>
                </div>
            </div>
        </div>
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
    </div>
    <script src="/js/main.js"></script>
</body>

</html>