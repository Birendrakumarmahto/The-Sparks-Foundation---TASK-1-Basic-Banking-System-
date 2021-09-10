<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM customer");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Details</title>
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
            <a class="nav-link" href="./transfer.php">Transfer Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./transferHistory.php">Transaction History</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here  -->
 
   

    

    
 
    <!-- table  -->

<?php
if (mysqli_num_rows($result) > 0) {
?>
    
    <div class="main-div">
        <h1>CUSTOMER'S LIST</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th><b>ID</b></th>
                            <th>NAME</th>
                            <th>E-MAIL</th>
                            <th>CURRENT BALANCE</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["Name"]; ?></td>
                        <td><?php echo $row["Email"]; ?></td>
                        <td>₹ <?php echo $row["current_balance"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
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
  
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgb(185, 210, 250); margin-top: 80px;">
          © 2021 Copyright:
          <p class="love" style="color: black;">Made with  <i class="fa fa-heart pulse"></i>  by Birendra Kumar Mahto</p>
        </div>
        <!-- Copyright -->
      </footer>
</body>

</html>
