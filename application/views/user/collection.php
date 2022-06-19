<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/user/collection.css" />

  <title>Collection</title>
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
  <section class="title-collection mt-5 pt-5">
    <div class="container text-center">
      <h1>Collections</h1>
      <p>Explore many collections of best places, cafe, restaurants, or many places to visit</p>
    </div>
  </section>

  <section class="collection-item mt-5">
    <div class="container">
      <div class="row">

        <?php foreach ($collection as $cl) : ?>
          <div class="col-md-6 col-lg-3 mt-4">
            <div class="card" style="background-color: #203239; height: 40vh; background-size: cover;">
              <div class="card-body colection-item d-flex align-items-center">
                <div>
                  <a href="<?= base_url('User/hasilcollection/') ?><?= $cl->collection_nama ?>" class="stretched-link mt-5">
                    <div class="container">
                      <h5 class="title-item-collection"><?= $cl->collection_nama ?></h5>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>