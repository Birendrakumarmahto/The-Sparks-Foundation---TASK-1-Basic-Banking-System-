<?php
include_once 'database.php';

?>

<?php
include_once 'transaction.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>


    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    

</head>
<body>

             <!--Navbar Starts Here-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html">TSF BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-right ml-auto">
          <li>
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./customers.php">Customer List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./transfer.php">Transfer Money</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here  -->

  
      <?php
      $sender = $_GET["sender"];
      $receiver =$_GET["receiver"];
      $amount = $_GET["amount"];
      
      
      $send = mysqli_query($conn,"SELECT current_balance FROM `customer` WHERE name=\"$sender\";");
      $row_send = mysqli_fetch_array($send);
      
      

      $recv = mysqli_query($conn,"SELECT current_balance FROM `customer` WHERE name=\"$receiver\";");
      $row_recv = mysqli_fetch_array($recv);
      

      

      if($row_send[0]<$amount){
        echo '<script>alert("INSUFFICIENT BALANCE")</script>';
        header("Location:transfer.php");
      }
      elseif($amount<0){
        
        echo '<script>alert("Please Enter Valid Amount")</script>';
        header("Location:transfer.php");
      }
      else{
      $s = $row_send[0] - $amount;
      $r = $row_recv[0] + $amount;
      mysqli_query($conn,"UPDATE customer SET current_balance = $s WHERE name = \"$sender\"; ");
      mysqli_query($conn,"UPDATE customer SET current_balance = $r WHERE name = \"$receiver\"; ");

      echo "<h1 style='color:green; text-align:center; margin-top:20px'>₹ $amount TRANSFFERED SUCCESSFULLY</h1>";
      echo "<h3 style='color:blue; text-align:center; margin-top:20px;'>FROM <span style='color:hsl(187, 93%, 58%); text-transform:uppercase'>$sender</span> TO <span style='color:hsl(187, 93%, 58%); text-transform:uppercase'>$receiver</span></h3>";
      
      mysqli_query($con,"INSERT INTO transaction (SNo, Sender, Receiver, Amount) VALUES (NULL, \"$sender\", \"$receiver\", \"$amount\");");

      }

     


      ?>

 <div style="text-align:center;">
<button type="button"  class="btn btn-primary btn-lg" onclick="location.href = './transferHistory.php';">See Transferred Details</button>
    </div>
  







  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start" style="margin-top: 250px;" margin-top="20px">
    <!-- Grid container -->
    
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(214,230,255)" >
      © TSF-SEP-2021 Copyright:
      <p class="love">Made with  <i style="color: red;" class="fa fa-heart pulse" ></i>  by Birendra Kumar Mahto</p>
    </div>
    <!-- Copyright -->
  </footer>



  <!-- spalsh screen js -->
  <script>
    var preloader = document.getElementById("loading");
    function loader() {
      preloader.style.display = 'none';
    }
  </script>

  <script src="assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

  <!-- aos data  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 700,
    });
  </script>


    
</body>
</html>
