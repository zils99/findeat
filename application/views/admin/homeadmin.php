<!-- main -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 100vh;">

    <div class="row mt-4">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div style="font-size: 12px;" class="row mx-auto pb-2">
                        <div class="col-lg-2 m-auto">
                            <i style="font-size: 200%;" class="fa-solid fa-store"></i>
                        </div>
                        <div class="col">
                            <b><?= $jmlrestaurant; ?> </b><br>
                            Total Restaurant
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div style="font-size: 12px;" class="row mx-auto pb-2">
                        <div class="col-lg-2 m-auto">
                            <i style="font-size: 200%;" class="fa-solid fa-utensils"></i>
                        </div>
                        <div class="col">
                            <b>46</b><br>
                            Total Reservation
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
    </div>

    <div class="table-responsive">
        <table class="table bg-white table-sm">
            <thead>
                <tr>
                    <th scope="col">Join Date</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Address</th>
                    <th scope="col">Total Menu</th>
                    <th scope="col">Restaurant's Name</th>
                </tr>
            </thead>
            <?php foreach ($restaurant as $rs) : ?>
                <tbody>
                    <tr>
                        <td><?= $rs->Join ?></td>
                        <td><?= $rs->Owner ?></td>
                        <td><?= $rs->Address ?></td>
                        <td><?= $rs->Menu ?></td>
                        <td><?= $rs->Restaurant_name ?></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</main>