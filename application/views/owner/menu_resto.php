            <!-- main -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 100%;">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Menu Resto</h1>
                </div>

                <div class="mb-4">
                    <button class="btn btn-primary" id="addButton" data-toggle="modal" data-target="addMenuImageModal">Add</button>
                </div>
                <div class="table-responsive">
                    <table class="table bg-white table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php foreach ($menu as $mn) : ?>
                            <tbody>
                                <tr>
                                    <td><img id="img-1" style="width: 20rem; height: 15rem; object-fit: cover;" src="<?= base_url('assets/'); ?>img/menu/<?= $mn['menu_gambar']; ?>" alt=""></td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    </table>
                </div>
            </main>
            </div>
            </div>

            <!-- modal popup add menu -->
            <div class="modal fade" id="addMenuImageModal" tabindex="-1" role="dialog" aria-labelledby="addMenuImageModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <?php echo form_open_multipart('Owners/addmenu'); ?>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Menu Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="uploadImage">Pilih gambar</label>
                                <input type="file" name="gambarmenu" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="modal-submit-btn">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <script>
                var modalAddCollection = function(callback) {

                    $("#addButton").on("click", function() {
                        $("#addMenuImageModal").modal('show');
                    });

                    $("#modal-submit-btn").on("click", function() {
                        callback(true);
                        $("#addMenuImageModal").modal('hide');
                    });

                    $(".close").on("click", function() {
                        callback(true);
                        $("#addMenuImageModal").modal('hide');
                    });
                };

                modalAddCollection(function(confirm) {
                    if (confirm) {

                    } else {

                    }
                });
            </script>