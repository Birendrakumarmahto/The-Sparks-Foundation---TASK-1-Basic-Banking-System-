<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM customer");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>


    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

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
            <a class="nav-link" href="./transferHistory.php">Transaction History</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here  -->

  <!-- Transfer Money -->
  <div class="container">
    <div class="row" >
        <div class="col s12 m4 l8" >
            <div class="card">
                <div class="card-content">
                    <h3 style="margin-top: 15px; color:blue;" class="center-align" >TRANSFER MONEY</h3>
                        <div class="form center-align" >
                            <form action="final.php" method="get">
                                <input type="text" name="sender" placeholder="Enter sender name">
                                <input type="text" name="receiver" placeholder="Enter receiver name">

                               

                                <input type="number" name="amount" placeholder="Enter amount here">

                                

                                <button type="submit" class="btn light-blue accent-3">Transfer Money</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- Transfer Money End -->
  

  







  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start" style="margin-top: 250px;" margin-top="20px">
    <!-- Grid container -->
    
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(214,230,255)" >
      © 2021 Copyright:
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
