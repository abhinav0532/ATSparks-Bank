<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <style>
    .bg-4 {
    background-color: #2f2f2f;
    color: #fff;
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .navbar{
    padding: 20px;
  }

  .nav-link:hover{
    color: red;

  }
  a:hover {
    background-color:lightgreen;
  }
    </style>
</head>
<body class="indexPage">
<?php
    require 'config.php';
    $query = "SELECT * FROM job";
    $result = mysqli_query($conn,$query);
?>

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

    <div class="container">

            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover tableStyle table-sm table-res">
                        <thead>
                            <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Credit</th>
                            <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_assoc($result)){
                ?>

                        <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['NAME']?></td>
                        <td><?php echo $rows['Email']?></td>
                        <td><?php echo $rows['Amount']?></td>
                        <td><a href="selectedUserdetail.php?id= <?php echo $rows['id'] ;?>"class="text-red"> <button type="button" class="btn btn-success">Transfer</button></a></td>

                    </tr>
                    <?php
                    }
                        ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

</div>
<footer class="container-fluid bg-4 text-center">
    <p> Copyright © 2021 ATSparks<p>
    <p>ATSparks Credit Management System</p>

   <p>Powered by The Sparks Foundation</p>
  </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
