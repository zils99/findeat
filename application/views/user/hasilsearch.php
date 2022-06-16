<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/user/popular_in_riau.css" />

  <title>Popular in <?= $title ?></title>
</head>

<body>
  <section class="sec-navbar">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('User/home') ?>">FindEat!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <form method="post" action="<?= base_url('User/home'); ?>" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search for Restaurant" aria-label="Search" size="70" name="cari">
                <button class="btn btn-light" type="submit">Search</button>
              </form>
            </li>
            <li class="nav-item space-blank"></li>
            <li class="nav-item">
              <div class="dropdown dropdown-user">
                <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user"></i> &ensp;<?= $user['user_nama']; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                  <li>
                    <a class="dropdown-item" href="<?= base_url('Landing/logout') ?>">Log Out</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>
  <section class="title-popular mt-5">
    <div class="container text-center">
      <h1>Restaurants in <?= $title ?></h1>
    </div>
  </section>

  <section class="popular-item mt-5">
    <div class="container">
      <div class="row">
        <?php foreach ($restaurant as $rs) : ?>
          <div class="col-md-6 col-lg-4 mb-3">
            <div class="card">
              <img src="<?= base_url('assets/'); ?>/img/restaurant/<?= $rs->restaurant_gambar ?>" class="card-img-top">
              <div class="card-body">
                <a href="<?= base_url('User/detailproduct/') ?><?= $rs->restaurant_name ?>" class="stretched-link">
                  <h3><?= $rs->restaurant_name ?></h3>
                </a>
                <p class="location-item"><i class="fa-solid fa-location-dot"></i><?= $rs->lokasi_tempat ?></p>
                <p class="card-text"><?= $rs->restaurant_jamoperasional ?></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>