<?php

$getJson = file_get_contents('files/kfc-kms.json');
$kfcKms = json_decode($getJson, true);
$kfcKms = $kfcKms['menu'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kfc KMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<div class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
      <div class="container">
        <a class="navbar-brand" href="#"><img src='img/logo.png' width='30px'> KFC-KMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">All Menus</a>
            <!-- <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>
</div>    
</header>    
<main>
<div class="container bg-ligth p-4">
    <div class="row">
        <?php foreach($kfcKms as $row): ?>
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
              <img src=" <?= $row['image'] ?> " class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> <?= $row['name'] ?> </h5>
                <h5 class="card-title"> $ <?= $row['price'] ?> </h5>
                  <ul class="card-text">
                    <?php foreach($row['content'] as $content ):  ?> 
                    <li class="list"> <?= $content ?> </li> 
                    <?php endforeach; ?>
                  </ul>
               <a href="#" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
        </div>
        <?php endforeach ?> 
    </div>
</div>    
</main>
<footer>
<div class="container position-bottom">
    <small>
        @copyright KFC-KMS 2021
    
    </small>

</div>    


</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>