<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/index.css">
    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="containernav">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../PHP/Producten.php">Producten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../PHP/reviews.php">Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../PHP/bestellingen.php">Bestellen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
$servername = "localhost";
$username = "Beroeps088699";
$password = "Beroeps088699";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>

<div class="scrollable-container">
    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>

    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>

    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>
    
    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>
    
    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>
    
    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>
    
    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>
    
    <div class="container">
      <div class="product">
        <h1>Hier komt product</h1>
      </div>
      <div class="text">
        <h1>Hier komt de text</h1> 
      </div>
    </div>
</div>





<!--Footer-->
<footer class="footer">
  <div class="container1">
    <p>&copy;De verzamelaar 088699</p>
  </div>
</footer>

<!-- bootstrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>