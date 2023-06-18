<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <style>
    .card{
      box-shadow: 0px 0px 23px 5px rgba(17,17,26,0.18);
      transition: all 0.3s ease-in-out;
    }
    .card:hover {
      transform: scale(1.05);
      transition: all 0.3s ease-in-out;
    }
    
    </style>
</head>
<body>
  <?php
    include "./navbar.php";
    include "./data.php"
     ?>




<div class="container d-flex justify-content-center align-items-center gap-5" style="height: 80vh;">


<div class="card text-bg-danger p-3 card-hover" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php print_r($users['user1']['name'])  ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Age: <?php print_r($users['user1']['age'])  ?> </h6>
    <p class="card-text"><?php print_r($users['user1']['clr']) ?></p>
    <a href="#" class="card-link text-decoration-none text-white">Card link</a>
    <a href="#" class="card-link text-decoration-none text-white">Another link</a>
  </div>
</div>

<div class="card text-bg-success p-3 " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php print_r($users['user2']['name'])  ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Age: <?php print_r($users['user2']['age'])  ?></h6>
    <p class="card-text"><?php print_r($users['user2']['clr']) ?></p>
    <a href="#" class="card-link text-decoration-none text-white">Card link</a>
    <a href="#" class="card-link text-decoration-none text-white">Another link</a>
  </div>
</div>

<div class="card text-bg-primary p-3 " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php print_r($users['user3']['name'])  ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Age: <?php print_r($users['user3']['age'])  ?></h6>
    <p class="card-text"><?php print_r($users['user3']['clr']) ?></p>
    <a href="#" class="card-link text-decoration-none text-white">Card link</a>
    <a href="#" class="card-link text-decoration-none text-white">Another link</a>
  </div>
</div>
<div class="card text-bg-warning p-3 text-white" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php print_r($users['user4']['name'])  ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Age: <?php print_r($users['user4']['age'])  ?></h6>
    <p class="card-text"><?php print_r($users['user4']['clr']) ?></p>
    <a href="#" class="card-link text-decoration-none text-white">Card link</a>
    <a href="#" class="card-link text-decoration-none text-white">Another link</a>
  </div>
</div>




</div>











<script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>