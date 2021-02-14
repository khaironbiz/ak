<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title><?php echo $title ?></title>
</head>

<body class="bg-dark">
    <div class="col-12">

    </div>
    <div class="container">
        <div class="col-12">

        </div>
        <div class="card">
            <div class="card-header text-center">
                <h4 class="">Registrasi Anggota</h4>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-lg-4">
                        <label for="inputEmail4" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail4" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-lg-2">
                        <label for="inputEmail4" class="form-label">Gelar Depan</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-lg-2">
                        <label for="inputEmail4" class="form-label">Gelar Belakang</label>
                        <input type="text" class="form-control" id="inputEmail4">
                    </div>

                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Whatsapp</label>
                        <input type="number" class="form-control" id="inputEmail4">
                    </div>

                    <div class="col-6">
                        <label for="inputAddress" class="form-label">Alamat : Nama Jalan, RT/RW</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-3">
                        <label for="inputAddress2" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-3">
                        <label for="inputAddress2" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Kelurahan</label>
                        <select id="kelurahan" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail4" class="form-label">Pendidikan Terahir</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>D3</option>
                            <option>D4</option>
                            <option>S1</option>
                            <option>S1 + Profesi</option>
                            <option>S2</option>
                            <option>S2 + Spesialis</option>
                            <option>S3</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail4" class="form-label">Jenis Tenaga Kesehatan</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail4" class="form-label">Pekerjaan</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Buat Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                <p>Saya Telah membaca ketentuan dan anturan yang berlaku di<a href=""> website Acara Kesehatan</a></p>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted text-center">
                Acara Kesehatan
            </div>
        </div>
    </div>

    <div class="col-8">

    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            // sembunyikan form kabupaten, kecamatan dan desa
            $("#form_kab").hide();
            $("#form_kec").hide();
            $("#form_des").hide();

            // ambil data kabupaten ketika data memilih provinsi
            $('body').on("change", "#form_prov", function() {
                var id = $(this).val();
                var data = "id=" + id + "&data=kabupaten";
                $.ajax({
                    type: 'POST',
                    url: "get_daerah.php",
                    data: data,
                    success: function(hasil) {
                        $("#form_kab").html(hasil);
                        $("#form_kab").show();
                        $("#form_kec").hide();
                        $("#form_des").hide();
                    }
                });
            });

            // ambil data kecamatan/kota ketika data memilih kabupaten
            $('body').on("change", "#form_kab", function() {
                var id = $(this).val();
                var data = "id=" + id + "&data=kecamatan";
                $.ajax({
                    type: 'POST',
                    url: "get_daerah.php",
                    data: data,
                    success: function(hasil) {
                        $("#form_kec").html(hasil);
                        $("#form_kec").show();
                        $("#form_des").hide();
                    }
                });
            });

            // ambil data desa ketika data memilih kecamatan/kota
            $('body').on("change", "#form_kec", function() {
                var id = $(this).val();
                var data = "id=" + id + "&data=desa";
                $.ajax({
                    type: 'POST',
                    url: "get_daerah.php",
                    data: data,
                    success: function(hasil) {
                        $("#form_des").html(hasil);
                        $("#form_des").show();
                    }
                });
            });


        });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>