<?php
include_once 'transaction.php';
$result = mysqli_query($con,"SELECT * FROM transaction");
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction History</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet"
    href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!-- AOS  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body onload="loader()">

  <!-- loader for splash screen -->
  <div id="loading"></div>

  <!--Navbar Starts Here-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light top"  >
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html">TSF BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-right ml-auto">
          <li>
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./customers.php">Customers</a>
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
if (mysqli_num_rows($result) > 0) {
?>
    
    <div class="main-div">
        <h1>Transaction History</h1>
        <div class="center-div">
            <div class="table-responsive tableFixHead" >
                <table>
                    <thead>
                        <tr>
                            <th><b>SNo.</b></th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["SNo"]; ?></td>
                        <td><?php echo $row["Sender"]; ?></td>
                        <td><?php echo $row["Receiver"]; ?></td>
                        <td>₹ <?php echo $row["Amount"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    
                    
                    <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

                     
                    </tbody>
                </table>

            </div>

        </div>

    </div>




 
  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start" style="margin-top: 50px;" margin-top="20px">
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