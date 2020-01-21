<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <h1 class="text-center mt-5">Daftar Artikel Terkini!</h1>
    <div class="container">
      
      <div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://loremflickr.com/320/240/dog" class="d-block w-100" style="height: 250px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://loremflickr.com/320/240/cat" class="d-block w-100" style="height: 250px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://loremflickr.com/320/240/nature" class="d-block w-100" style="height: 250px;" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="row">
        <?php for ($i=0; $i < 6; $i++) { ?>
        <div class="col-sm-12 col-md-4 mb-3">
          <div class="card">
            <img src="https://robohash.org/wkwkw0<?= $i ?>" class="card-img-top" alt="Gambar">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>