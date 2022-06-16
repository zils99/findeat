<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/detail_product.css" />

  <title>Detail Product</title>
</head>

<body>
  <section class="sec-navbar">
    <nav class="navbar navbar-expand-md">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('User/home'); ?>">FindEat!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  <section class="detail-item mt-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">
          <img src="assets/img/detail_item.png" alt="" width="80%">
        </div>
        <div class="col-md-7">
          <div class="description py-auto">
            <h1>Ramen Ya!</h1>
            <p><span><i class="fa-solid fa-location-dot"></i></span> Paris Van Java Mall, Sukajadi</p>
            <p><span><i class="fa-solid fa-clock"></i></span> 10 am - 10 pm</p>
            <p><span><i class="fa-solid fa-money-bill"></i></span> Rp.100.000 - 200.000</p>
          </div>
          <div class="button-product mt-5">
            <button type="button" class="btn review btn-lg">Add Review</button>

            <button type="button" class="btn direction btn-lg">Direction</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="menu-review mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="title2 mt-4">Menu</h2>
          <img src="assets/img/menu1.png" alt="">
          <br>
          <a class="all-menu" href="#">See all menus >> </a>
        </div>
        <div class="col-md-7">
          <h2 class="title2 mt-4">Review</h2>
          <p>Have you ever try this restaurant? Give you experiance here!</p>
          <button type="button" class="btn rating"><i class="fa-solid fa-star"></i> 1</button>
          <button type="button" class="btn rating"><i class="fa-solid fa-star"></i> 2</button>
          <button type="button" class="btn rating"><i class="fa-solid fa-star"></i> 3</button>
          <button type="button" class="btn rating"><i class="fa-solid fa-star"></i> 4</button>
          <button type="button" class="btn rating"><i class="fa-solid fa-star"></i> 5</button>
          <div class="review-user mt-4">
            <table>
              <tr>
                <table class="mt-3" style="width:100%">
                  <tr>
                    <th rowspan="2" style="width: 90px;"><img class="rounded-circle" src="assets/img/profile-review.jpg" alt="" width="70%"></th>
                    <td style="width: 50px;">
                      <div class="rating rating-user"><i class="fa-solid fa-star"></i> 5</div>
                    </td>
                    <td class="profile-name">mitawikantari</td>
                  </tr>
                  <tr>
                    <td colspan="2">Suka banget sama ramennya! pelayanannya juga ramah</td>
                  </tr>
                </table>
              </tr>
              <tr>
                <table class="mt-3" style="width:100%">
                  <tr>
                    <th rowspan="2" style="width: 90px;">
                      <div class="profile-option"></div>
                    </th>
                    <td style="width: 50px;">
                      <div class="rating rating-user"><i class="fa-solid fa-star"></i> 4</div>
                    </td>
                    <td class="profile-name">cikacarissa</td>
                  </tr>
                  <tr>
                    <td colspan="2">enak banget, harganya juga murah.</td>
                  </tr>
                </table>
              </tr>
            </table>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="localities my-5">

  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>