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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/customerstyles.css">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Bank of Demo</title>
</head>
<style>

  </style>
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
  <div class="wrapper rounded">
    <h3 class="text-center text-light "><div class="fa fa-angle-double-right" style="color: #ff6347;">Transactions History</div></h3>
    <div class="table-responsive mt-3">
        <table class="table  table-borderless">
            <thead>
                <tr class="text-light">
                    <!-- <th scope="col">S.No</th> -->
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Sender's Name</th>
                    <th scope="col">Sender Account No.</th>
                    <th scope="col">Receiver's Name</th>
                    <!-- <th scope="col">Email</th> -->
                    <th scope="col">Receiver Account No.</th>
                    <th scope="col">Transaction Date</th>
                    <th scope="col" class="text-right">Amount Transferred</th>
                    <th scope="col" class="text-right">Message</th>
                </tr>
            </thead>
<?php

include('connection.php');


$query="SELECT * FROM transactions order by transaction_date desc";
$query_run= mysqli_query($con,$query);


 while($res = mysqli_fetch_array($query_run)){
  ?>
            <tbody class="text-light">
                <tr class="text-light">
                <!-- <td scope="row"> <span class="mr-1"><?php echo $res['tid']; ?></span>  </td> -->

                    <td scope="row"> <span class="mr-1"><?php echo $res['sender']; ?></span>  </td>
                    <td scope="row"> <span class="mr-1"><?php echo $res['sender_acc']; ?></span>  </td>
                    <td scope="row"> <span class="mr-1"><?php echo $res['receiver']; ?></span>  </td>
                    <td scope="row"> <span class="mr-1"><?php echo $res['receiver_acc']; ?></span>  </td>
                    <td scope="row"> <span class="mr-1"><?php echo $res['transaction_date']; ?></span>  </td>
                    <td scope="row"> <span class="mr-1"><?php echo $res['amount']; ?></span>  </td>
                    <td scope="row"> <span class="mr-1"><?php echo $res['msg']; ?></span>  </td>
                    
                </tr>
                
            </tbody>
            <?php 
 }

 mysqli_error($con);
  ?>
        </table>
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
</body> 
</html>
