<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styl.css"> -->
    <title> Basic Banking System </title>
    <!-- Css stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styl.php">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>
      <!-- navbar starts here  -->
<section id="nava">
      <div  class="nnn">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="./index.php">ATSpark Bank</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./viewusers.php">Transfer</a>
              </li>
              <li class="nav-item">
               <a class="nav-link"href="./transactionDetails.php">Txn History</a>
              </li>
              <li class="nav-item">
               <a class="nav-link"href="./aboutus.html">About Us</a>
              </li>
            </ul>
          </div>
      </nav>
    </div>  <!-- navbar ends here  -->
</section>
<section id="Middle">


    <!-- here content starts here -->
    <div class="container-fluid hero-content">
      <div class="row align-items-center">
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
          <h1>Money transaction</h1>
          <p class="lead muted">Easy way to transfer money from any where</p>
          <h3>Welcome</p>
          <br>
          <br>
          <a class="button" href="./viewusers.php"><span>Send</span></a>
        </div>
        <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
          <div class="hero-img-div">
            <img class="hero-img" src="images.jpg" alt="img-showing-money-transfer">
          </div>
        </div>
      </div>
         <hr>
    </div>
    </section>
    <!-- here content ends here -->

<section id="foot">


     <footer>

       <div class="navbar navbar-expand-lg navbar-light bg-light row text-center">
         <div class="col-md-6">
           <p>This project is made by Abhinav Tripathi #2021 at GRIP.</p>
           <p>             © Copyright 2021 </p>
           <p>ATSpark Banking System || Abhinav Tripathi<p>

         </div>
         <div class="col-md-6 text-inline">
             <ul class="social-icons">
               Contact Me:
               <li><a target="_blank" class="github" href="https://github.com/abhinav0532"><i class="fab fa-github fa-2x"></i></a></li>
               <li><a target="_blank" class="linkedin" href="https://www.linkedin.com/in/abhinav-tripathi-9999321a9/"><i class="fab fa-linkedin fa-2x"></i></a></li>
               <!-- <li><a target="_blank" class="github" href="http"><i class="fas fa-envelope fa-2x"></i></a></li> -->

             </ul>
         </div>
       </div>
     </footer>
     </section>
     <!-- footer ends here -->
<!--Footer Ends-->
</body>

</html>
