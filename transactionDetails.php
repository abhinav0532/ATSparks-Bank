<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <style>
    .navbar{
      padding: 20px;
    }

    .nav-link:hover{
      color: red;

    }
    a:hover {
      background-color:lightgreen;
    }


        h2{
            margin-top:30px;
            color: #0A6F6B;
        }
    .bg-4 {
    background-color: #2f2f2f;
    color: #fff;
    padding-top: 40px;
    padding-bottom: 40px;
  }

    </style>
</head>
<body class="indexPage">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">ATSparks</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Services</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="./viewusers.php"> Transact </a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="./transactionDetails.php"> Txn History </a></li>
        </ul>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="./aboutus.html">About Us</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

        <div class="container divStyle">
        <h2 class="text-center">Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table text-center table-striped table-hover tableStyle ">
            <thead>
            <tr>
            <th>Id</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Credit</th>

            </tr>
        </thead>
        <tbody>
            <?php

            include 'config.php';

            $sql ="select * from transfer";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
                ?>
            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['credit']; ?> </td>

            <?php
            }

            ?>



        </tbody>
    </table>
    </div>
        </div>
        <footer class="container-fluid bg-4 text-center">
          <p> Copyright © 2021 ATSparks<p>
          <p>ATSparks Credit Management System</p>

         <p>Powered by The Sparks Foundation</p>
  </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
