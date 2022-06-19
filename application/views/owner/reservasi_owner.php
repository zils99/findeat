<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi | Owner</title>
    <!-- jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owner/reservasi_owner.css">
</head>

<body>
    <header class="navbar navbar-expand-lg nav-bg navbar-dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="<?= base_url('owner/home'); ?>">FindEat! owner</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div style="height: 100vh;" class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar-bg sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li>
                            <h4>Restaurant</h4>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('Owners/home') ?>">
                                <span data-feather="home"></span>
                                <i class="fa-solid fa-shop"></i>
                                Profile Resto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= base_url('Owners/listmenu') ?>">
                                <span data-feather="home"></span>
                                <i class="fa-solid fa-burger"></i>
                                Menu Resto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Owners/home') ?>">
                                <span data-feather="file"></span>
                                <i class="fa-solid fa-chart-simple"></i>
                                Performa Resto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Owners/reservasi') ?>">
                                <span data-feather="shopping-cart"></span>
                                <i class="fa-solid fa-calendar-check"></i>
                                Reservasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url('Landing/logout') ?>">
                                <span data-feather="shopping-cart"></span>
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- main -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 100vh;">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Reservasi</h1>
                </div>

                <div class="table-responsive">
                    <table class="table bg-table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Date</th>
                                <th scope="col">Jumlah Orang</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php foreach ($reservasi as $rs) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $rs->reservasi_username ?></td>
                                    <td><?= $rs->reservasi_tanggal ?></td>
                                    <td><?= $rs->reservasi_seat ?></td>
                                    <td><?= $rs->reservasi_status ?></td>
                                    <td>
                                        <?php if ($rs->reservasi_status === 'Waiting') : ?>

                                            <button class="btn btn-primary" value="acc">Acc</button>
                                            <a href="<?= base_url('Owners/reservasireject/') ?><?= $rs->reservasi_id ?> "><button class="btn btn-danger" value="reject">Reject</button></a>

                                        <?php endif; ?>

                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- modal popup for confirmation -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="confirm-modal">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Reservasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda ingin mengkonfirmasi reservasi ini?</p>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('Owners/reservasiacc/') ?><?= $rs->reservasi_id ?> "><button type="button" class="btn btn-primary" id="modal-confirm-btn">Accept</button></a>
                    <button type="button" class="btn btn-secondary" id="modal-cancel-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script>
        var modalConfirm = function(callback) {

            $(".btn-primary").on("click", function() {
                $("#confirm-modal").modal('show');
            });

            $("#modal-confirm-btn").on("click", function() {
                callback(true);
                $("#confirm-modal").modal('hide');
            });

            $("#modal-cancel-btn").on("click", function() {
                callback(true);
                $("#confirm-modal").modal('hide');
            });

            $(".close").on("click", function() {
                callback(true);
                $("#confirm-modal").modal('hide');
            });
        };

        modalConfirm(function(confirm) {
            if (confirm) {

            } else {

            }
        });
    </script>
</body>

</html>