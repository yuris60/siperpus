<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/pages/error.css">
</head>

<body>
    <div id="error">


        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <img class="img-error" src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/images/samples/error-404.png" alt="Not Found">
                <div class="text-center">
                    <h1 class="error-title">HALAMAN TIDAK DITEMUKAN</h1>
                    <p class='fs-5 text-gray-600'>Demi kenyamanan mohon untuk kembali ke Dashboard.</p>
                    <a href="<?= base_url() ?>" class="btn btn-lg btn-outline-primary mt-3">Kembali</a>
                    <br><br><br>
                </div>
            </div>
        </div>


    </div>
</body>

</html>