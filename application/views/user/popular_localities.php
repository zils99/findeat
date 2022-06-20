<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Localities</title>
    <!-- fontawesome js -->
    <script src="https://kit.fontawesome.com/bdbefd3567.js" crossorigin="anonymous"></script>
    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/user/popular_localities.css">
</head>

<body>
    <header>
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
    </header>

    <main style="height: 100vh;" class="container-fluid">
        <div class="mt-4 mb-4">
            <div>
                <h3 class="text-center" style="font-weight: bolder;">Popular Localities in and Around Bandung</h3>
            </div>

            <!-- grid item -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mx-auto">
                <?php foreach ($lokasi as $lc) : ?>
                    <tbody>
                        <tr>
                            <div class="col-lg-4">
                                <div class="card m-2 m-lg-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <?= $lc->lokasi_tempat ?>
                                            <i class="fa-solid fa-angle-right"></i>
                                        </div>
                                        <a href="<?= base_url('User/hasillocalities/') ?><?= $lc->lokasi_tempat ?>" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>