<!-- main -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="height: 100%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile Resto</h1>
    </div>

    <?php echo form_open_multipart('Owners/updateprofile'); ?>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mx-auto pb-4">

        <div class="col-lg-6">
            <div class="form-group row">
                <p>Photo profile Resto <i class="fa-regular fa-image"></i></p>
                <img id="frameProfilePict" class="img-fluid" style="width: 20rem; height: 15rem; object-fit: cover;" src="<?= base_url('assets/'); ?>/img/restaurant/<?= $restaurant['restaurant_gambar']; ?>" alt="">
                <label for="exampleFormControlFile1">Ubah gambar</label>
                <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" onchange="previewProfilePict()">
            </div>
            <div class="form-group mt-4">
                <label for="inputTimeOP">Jam Operasional</label>
                <input type="text" class="form-control" id="inputTimeOP" placeholder="00:00" value="<?= $restaurant['restaurant_jamoperasional']; ?>" name="jam">
            </div>
            <div class="form-group mt-4">
                <label for="inputAVG">Rata-rata per 2 orang</label>
                <input type="text" class="form-control" id="inputAVG" placeholder="0" value="<?= $restaurant['restaurant_harga']; ?>" name="harga">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="inputName">
                    Nama Resto
                    <i class="fa-solid fa-shop"></i>
                </label>
                <input type="text" class="form-control" id="inputName" placeholder="Nama Resto" value="<?= $restaurant['restaurant_name']; ?>" name="nama">
            </div>
            <div class="form-group mt-4">
                <label for="inputAddress">Alamat</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" value="<?= $restaurant['restaurant_address']; ?>" name="alamat">
            </div>
            <div class="form-group mt-4">
                <label for="selectAddress">Daerah</label>
                <select class="form-control" id="selectAddress" name="daerah">
                    <option value=""><?= $restaurant['lokasi_tempat']; ?></option>
                    <?php foreach ($lokasi as $rs) : ?>
                        <option value="<?= $rs->lokasi_tempat ?>"><?= $rs->lokasi_tempat ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group mt-4">
                <label for="selectAddress">Collection</label>
                <select class="form-control" id="selectAddress" name="collection">
                    <option value=""><?= $restaurant['collection_tipe']; ?></option>
                    <?php foreach ($collect as $rs) : ?>
                        <option value="<?= $rs->collection_nama ?>"><?= $rs->collection_nama ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary d-flex ms-auto mb-4 me-2">Submit</button>
    </form>
</main>
</div>
</div>

<script>
    $(document).ready(function() {
        // on deleted menu image
        $(document).on('click', '.image-cancel', function() {
            let no = $(this).data('no');
            $(".preview-image.preview-show-" + no).remove();
        });
    })

    // profile pict preview
    function previewProfilePict() {
        frameProfilePict.src = URL.createObjectURL(event.target.files[0]);
    }

    // menu images preview
    var num = 0;

    function readImage() {

        var files = event.target.files; //FileList object
        var output = $(".preview-menus");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;

            var picReader = new FileReader();

            picReader.addEventListener('load', function(event) {
                var picFile = event.target;
                var html = '<div class="preview-image preview-show-' + num + '">' +
                    '<div class="image-cancel" data-no="' + num + '">x</div>' +
                    '<div class="image-zone"><img style="object-fit: cover;" id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                    '</div>'
                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#exampleFormControlFile2").val('');
    }
</script>