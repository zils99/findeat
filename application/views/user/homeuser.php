<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/user/home.css" />

  <title>Home FindEat!</title>
</head>

<body>
  <section class="sec-navbar">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('User/home') ?>">FindEat!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
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
  <section class="banner">
    <div class="container container-banner d-flex justify-content-center align-items-center">
      <div class="content-banner flex-grow-1">
        <div class="text-title text-center pb-4">
          <h1>FindEat!</h1>
          <h5>Find the best food and drink in bandung</h5>
        </div>
        <form method="post" action="<?= base_url('User/home'); ?>" class="search-restaurant">
          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg form-search" placeholder="Search for restaurant" name="cari" />
            <button type="submit" name="submit" class="input-group-text btn-search">
              <i class="fa-solid fa-magnifying-glass"></i>&ensp;Search
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="collection mt-4">
    <div class="container">
      <h3 class="secondary-title">Collections</h3>
      <div class="row">
        <div class="col-8 subtitle">
          <p>Explore many restaurant in Bandung</p>
        </div>
        <div class="col-4 text-end more-collection"><a href="<?= base_url('User/seecollection') ?>">See all collection</a></div>
      </div>
      <div class="row">
        <?php foreach ($collections as $cl) : ?>
          <div class="col-6 col-lg-3 mt-4">
            <div class="card" style="background-color: #203239; height: 20vh; background-size: cover;">
              <div class="card-body colection-item d-flex align-items-center">
                <a href="<?= base_url('User/hasilcollection/') ?><?= $cl->collection_nama ?>" class="stretched-link mt-4">
                  <div class="container">
                    <h5 class="title-item-collection"><?= $cl->collection_nama ?></h5>
                  </div>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <section class="localities my-5">
    <div class="container">
      <h3 class="secondary-title link-title"><a href="<?= base_url('User/locallities') ?>">Popular Localities in and around Bandung</a></h3>
    </div>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>