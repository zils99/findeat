<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Reservation</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/user/reservasi.css" />
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    <section class="content mt-5 mb-5">
        <div class="container" style="height: 100%;">
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
                    <div class="reservation-section">
                        <h2 class="title2">RESERVATION</h2>
                        <form method="post" action="<?= base_url('User/addreservasi/'); ?><?= $restaurant['restaurant_name']; ?>">
                            <div class="form-group row mb-3">
                                <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="inputTanggal" name="tanggal">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name" value="<?= $user['user_nama'] ?>" name="nama">
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <label for="inputSeat" class="col-sm-2 col-form-label">Seat</label>
                                <div class="col-3">
                                    <!-- initial value 1 -->
                                    <input type="number" class="form-control" id="inputSeat" placeholder="0" min="1" value="1" name="seat">
                                </div>
                                Orang
                            </div>
                            <div class="form-blank-space">
                                <br><br>
                                <br><br>
                                <br>
                            </div>
                            <div>
                                <button type="button" class="btn btn-cancel me-3">Cancel</button>
                                <button type="submit" class="btn btn-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>