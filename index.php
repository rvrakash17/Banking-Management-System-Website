<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity=
"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
  <style>
    .image {
  width: 140px;
  height: 140px;
 
}
  </style>
    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
    <br>
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
          
              <div class="col-sm-12 col-md img text-center">
                <h1 >WELCOME TO SPARK FOUNDATION BANK<h2>
               
              </div>
            </div>
            <br><br>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/add.png" class="image">
                    <br><br>
                    <a href="createuser.php"><button class="btn btn-primary">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/delete.png" class="image">
                    <br><br>
                    <a href="removeuser.php"><button class="btn btn-primary">Delete Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/trans.png" class="image">
                    <br><br>
                    <a href="transfermoney.php"><button class="btn btn-primary">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="image">
                    <br><br>
                    <a href="transactionhistory.php"><button class="btn btn-primary">Transaction History</button></a>
                  </div>
                  
            </div>
      </div>

    
      <script src="navbar.js" ></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>