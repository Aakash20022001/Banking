<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUS</title>
    
    
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
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
<style>
.hc{
        height: 25rem;
        background-image: url("./img/contact2.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;
        
    }
    </style>
    <div class="container-fluid hc">
        <div class="container pt-5">
            <div class="row inner-text pl-0">
                <div class="col-md-6 text-light pb-5">
                    <h3 class="wow slideInUp">NEED HELP ?</h3>
                    <h1 class="wow mt-4 slideInDown">WE ARE HERE FOR YOU</h1>
                    <div class="pb-5">
                    <div class="btn btn-lg btn-danger wow mt-4  slideInLeft">
                        Get in Touch
                      </div>
                    </div>

                </div>

            </div>
            <div class="card-deck inner" >
                <div class="card text-center text-light pt-3 bg-transparent">
                    <i class="fas fa-envelope fa-3x"></i>
                  <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">bankofdemo@gmail.com</p>
                   
                  </div>
                </div>
                <div class="card text-center text-light pt-3 bg-transparent">
                    <i class="fas fa-phone-alt fa-3x"></i>
                  <div class="card-body">
                    <h5 class="card-title">Phone</h5>
                    <p class="card-text">+0731-22222</p>
                   
                  </div>
                </div>
                <div class="card text-center text-light pt-3 bg-transparent ">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                  <div class="card-body">
                    <h5 class="card-title">Office</h5>
                    <p class="card-text">Bulding number-4, Scheme No.78, AB road, Indore, Madhya Pradesh, India.</p>
                  
                  </div>
                </div>
              </div>       
        </div>
    </div> 
    
    <section class="my-5 pt-5 contactform" style="margin-top: 30px;">
    <div class="container text-light ">
      <form action="contactus.html" method="GET" id="form" >

        <div class="form-group" style="margin-top: 100px; padding-top: 50px;">
          <label for="email1">Email address</label>
          <input type="email" class="form-control" id="email" name = "EMail" placeholder="youremail@gmail.com" required>
        </div>
        <div class="form-group">
          <label for="Query">Query</label>
          <input type="text" class="form-control" id="query" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">select your country</label>
          <select text class="form-control"  name = "Country" id="exampleFormControlSelect2" required>
            <option value="AF">choose country</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">America</option>
            <option value="AS">India</option>
            <option value="AD">New Zealand</option>
            </select>
        </div>
        <div class="form-group">
          <label for="Dquery">Describe your Query</label>
          <textarea class="form-control" id="Dquery" rows="3" required></textarea>
        </div>
        <div class="mybtn">
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
      </form>
    </div>
</section>
              
<section class="footer bg-dark text-light">
    <div class="pl-5">
    <footer class="pt-4 md-5  border-top">
      <div class="row">
       
        <div class="col-6 col-md">
          <h3 class="pb-2">Company</h3>
          <ul class="list-unstyled text-small text-light">
            <li><a class="text-muted" href="#">About US</a></li>
            <li><a class="text-muted" href="#">Terms and conditions</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Privacy policy</a></li>
            
          </ul>
        </div>
        <div class="col-6 col-md">
          <h3 class="pb-2">Contact</h3>
          <ul class="list-unstyled text-small text-light">
            <li><a class="text-muted" href="#">bankofdemo@gmail.com</a></li>
            <li><a class="text-muted" href="#">+91-9823456722</a></li>
            <li><a class="text-muted" href="#">+0731-22222</a></li>
           
          </ul>
        </div>
        <div class="col-6 col-md">
          <h3 class="pb-2">Tech support</h3>
          <ul class="list-unstyled text-small text-light">
            <li><a class="text-muted" href="#">Installation Guide</a></li>
            <li><a class="text-muted" href="#">see Tutorials</a></li>
            <li><a class="text-muted" href="#">Activate</a></li>
            <li><a class="text-muted" href="#">Contact support</a></li>
          </ul>
        </div>
      </div>
      <div class="border-top">
        <h6 class="text-center mt-3">Copyright ©2021 All rights reserved
        </h6>
        </div>
    </footer>
  </div>
  </section>
  
</body>
</html>