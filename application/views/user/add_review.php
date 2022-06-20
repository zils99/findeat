<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/user/add_review.css" />

  <title>Add Review</title>
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
  <section class="content mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4">
          <img src="<?= base_url('assets/'); ?>/img/restaurant/<?= $restaurant['restaurant_gambar']; ?>" alt="" width="100%">
          <div class="description mt-3">
            <h1><?= $restaurant['restaurant_name']; ?></h1>
            <p><span><i class="fa-solid fa-location-dot"></i></span> <?= $restaurant['restaurant_address']; ?></p>
            <p><span><i class="fa-solid fa-clock"></i></span> <?= $restaurant['restaurant_jamoperasional']; ?></p>
            <p><span><i class="fa-solid fa-money-bill"></i></span> <?= $restaurant['restaurant_harga']; ?></p>
          </div>
        </div>
        <div class="col-md-12 col-lg-1"></div>
        <div class="col-md-12 col-lg-7">
          <form method="post" action="<?= base_url('User/addreview/'); ?><?= $restaurant['restaurant_id']; ?>">
            <div class="rating-section">
              <h2 class="title2">Rating</h2>
              <p>how good is the restaurant? Give your rating here!</p>
              <div class="form-rating">
                <group class="inline-radio">
                  <div class="rating">
                    <input type="radio" name="rating-value" value="1">
                    <label><i class="fa-solid fa-star"></i> 1</label>
                  </div>
                  <div class="rating">
                    <input type="radio" name="rating-value" value="2">
                    <label><i class="fa-solid fa-star"></i> 2</label>
                  </div>
                  <div class="rating">
                    <input type="radio" name="rating-value" value="3">
                    <label><i class="fa-solid fa-star"></i> 3</label>
                  </div>
                  <div class="rating">
                    <input type="radio" name="rating-value" value="4">
                    <label><i class="fa-solid fa-star"></i> 4</label>
                  </div>
                  <div class="rating">
                    <input type="radio" name="rating-value" value="5">
                    <label><i class="fa-solid fa-star"></i> 5</label>
                  </div>
                </group>
              </div>
            </div>
            <div class="review-section">
              <h2 class="title2 mt-5">Review</h2>
              <p>Please give your review if it's need!</p>
              <textarea name="comment" id="comment-review" cols="65" rows="10"></textarea>
              <br><br>
              <button type="cancel" class="btn btn-cancel">Cancel</button>
              <button type="submit" class="btn btn-submit">Submit Review</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>