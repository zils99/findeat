            <!-- main -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 100vh;">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
                    <h3>Lokasi</h5>
                </div>

                <div class="mb-4">
                    <button class="btn btn-primary" id="addButton" data-toggle="modal" data-target="addCollectionModal">Add</button>
                </div>

                <div class="table-responsive">
                    <table class="table bg-white table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php foreach ($listcollect as $rs) : ?>
                            <tbody>
                                <tr>
                                    <td><?= $rs->collect ?></td>
                                    <td><?= $rs->total ?></td>
                                    <td>
                                        <button class="btn btn-warning">Edit</button>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </main>
            </div>
            </div>

            <!-- modal popup add collecton -->
            <div class="modal fade" id="addCollectionModal" tabindex="-1" role="dialog" aria-labelledby="addCollectionModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Collection</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= base_url('Admin/addcollection'); ?>">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Collection Name :</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="modal-submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- javascript -->
            <script>
                var modalAddCollection = function(callback) {

                    $("#addButton").on("click", function() {
                        $("#addCollectionModal").modal('show');
                    });

                    $("#modal-submit-btn").on("click", function() {
                        callback(true);
                        $("#addCollectionModal").modal('hide');
                    });

                    $(".close").on("click", function() {
                        callback(true);
                        $("#addCollectionModal").modal('hide');
                    });
                };

                modalAddCollection(function(confirm) {
                    if (confirm) {

                    } else {

                    }
                });
            </script>