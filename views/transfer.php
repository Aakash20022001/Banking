<?php
session_start();
if(isset($_SESSION['errorMessage'])){
    echo "<script type='text/javascript'>
            alert('" . $_SESSION['errorMessage'] . "');
          </script>";
    //to not make the error message appear again after refresh:
    session_unset($_SESSION['errorMessage']);
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
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
    <div class="container py-2">
        <!-- For demo purpose -->
        <div class="row mb-1">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-6 text-light">Transfer Money</h1>
            </div>
        </div> <!-- End -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-white shadow-sm pt-2 pl-2 pr-2 pb-1">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Direct Bank Transfer </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Credit Card </a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                            </ul>
                        </div> <!-- End -->
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form  method="post" action="inserttransactions.php" >
                                    <div class="form-group"> <label for="username">
                                            <h6>Account Holder Name</h6>
                                        </label> <input type="text" name="sendername" placeholder="Sender's Name " required class="form-control "> </div>
                                    <div class="form-group"> <label for="cardNumber">
                                            <h6>Account Number</h6>
                                        </label>
                                        <div class="input-group"> <input type="text" name="senderacc" placeholder="Sender's Account Number" class="form-control " required>

                                        </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Receiver Name</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="receivername" placeholder="Receiver's Name" class="form-control " required>
                                            </div>
                                            <div class="form-group"> <label for="cardNumber">
                                                    <h6>Receiver Account Number</h6>
                                                </label>
                                                <div class="input-group"> <input type="text" name="receiveracc" placeholder="Receiver's Account Number" class="form-control " required>
                                                </div>
                                                <div class="form-group"> <label for="cardNumber">
                                                    <h6>Amount</h6>
                                                </label>
                                                <div class="input-group"> <input type="text" name="amounttransfer" placeholder="Enter Amount to be Transferred" class="form-control " required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="msg"><h6>Message For Receiver Here</h6></label>
                                                    <textarea class="form-control" name="msg" id="msg" rows="2" placeholder="Any Message For receiver"></textarea>
                                                </div>
                                                <div class="card-footer"> <button type="submit" name="submit" class="subscribe btn btn-primary btn-block shadow-sm" > Confirm Payment </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>
</html>