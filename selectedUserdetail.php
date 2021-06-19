<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['credit'];

    $sql = "SELECT * from job where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amouns are to be transferred.

    $sql = "SELECT * from job where id=$toUser";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  //if amoun
   //that we are gonna deduct from any user is
  // greater than the current amouns available then print insufficient balance.

 if(($amnt) <0)
    {

        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }


 else if($amnt == 0)
 {
     echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');</script>";
 }
    else {

        //if not then deduct the credits from the user's account that we selected.
        $newcredit = $sql1['Amount'] - $amnt;
        $sql = "UPDATE job set Amount=$newcredit where id=$from";
        mysqli_query($conn,$sql);



        $newcredit = $sql2['Amount'] + $amnt;
        $sql = "UPDATE job set Amount=$newcredit where id=$toUser";
        mysqli_query($conn,$sql);

        $sender = $sql1['NAME'];
        $receiver = $sql2['NAME'];
        $sql = "INSERT INTO `transfer`(`sender`,`receiver`, `credit`) VALUES ('$sender','$receiver','$amnt')";
        $tns=mysqli_query($conn,$sql);
        if($tns){
           echo "<script type='text/javascript'>alert('Transaction Successfull!');
window.location='transactionDetails.php';
</script>";
        }

        $newcredit= 0;
        $amnt =0;


    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amount Transfer</title>
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
        <h1 style="color: #c06565">Amount Transfer Process</h1>
        <form method="post" name="tcredit"><br/>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  job where id=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_array($query);
            ?>
            <label style="color: #c06565"> Amount Transfer From: </label><br/>
        <div class="table-responsive">
        <table class="table text-center table-striped table-hover tableStyle">

            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Amount</th>
            </tr>

            <tr>
                <td><?php echo $rows['id']?></td>
                <td><?php echo $rows['NAME'] ;?></td>
                <td><?php echo $rows['Email'] ;?></td>
                <td><?php echo $rows['Amount'] ;?></td>
            </tr>

        </table>
              </div>
            <label style="color: #c06565">Amount Transfer To:</label>
        <select class=" form-control" name="to" style="margin-bottom:5%;" required>
            <option value="" disabled selected> To </option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM job where id!=$sid";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_array($query)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['NAME'] ;?> (credits:
                    <?php echo $rows['Amount'] ;?> )

                </option>
            <?php
                }
            ?>
        </select> <br>
            <label style="color: #c06565">Enter Amount to be Transferred:</label>
            <input type="number" id="amm" class="form-control" name="credit" min="0" required/> <br/>
                <div class="text-center btn3">
            <button class="btn btn-danger" name="submit" type="submit" >Transfer</button>
            </div>
        </form>
    </div>
    <footer class="container-fluid bg-4 text-center">
    <p> Copyright © 2021 ATSparks</p>
    <p>ATSparks Management System</p>

   <p>Powered by The Sparks Foundation</p>
  </footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
