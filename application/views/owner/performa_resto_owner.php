<!-- main -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mx-auto mt-4 pb-4">

        <!-- column 1 -->
        <div class="col-lg-6 mb-5">

            <div class="text-center">
                <h4>Rating dari User</h4>
                <h4>(7 hari terakhir)</h4>
            </div>

            <div class="text-center mt-5">
                <i style="font-size: 100px; color: #FFCE31;" class="fa-solid fa-star"></i>
            </div>

            <div class="text-center mt-5">
                <div class="card m-2 m-lg-4 bg-table">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                <table class="table table-borderless bg-table mb-0 w-auto text-start">
                                    <tbody>
                                        <?php foreach ($review as $rv) : ?>
                                            <tr>
                                                <td>
                                                    <div style="background-color: #36F482; border-radius: 10px; padding: 2px;">
                                                        <div class="">
                                                            <i class="fa-solid fa-star"></i>
                                                            <?= $rv->review_rating ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?= $rv->review_name ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- column 2 -->
        <div class="col-lg-6">

            <div class="text-center">
                <h4>Review dari User</h4>
                <h4>(7 hari terakhir)</h4>
            </div>

            <div class="text-center mt-5">
                <i style="font-size: 100px; color: rgb(43, 43, 43)" class="fa-solid fa-message"></i>
            </div>

            <div class="text-center mt-5">
                <div class="card m-2 m-lg-4 bg-table">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                <table class="table table-borderless bg-table mb-0 w-auto">
                                    <tbody>
                                        <?php foreach ($review as $rv) : ?>
                                            <tr>
                                                <td>
                                                    <div class="text-start">
                                                        <h5><?= $rv->review_name ?></h5>
                                                        <p><?= $rv->review_comment ?></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>