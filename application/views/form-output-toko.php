<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="container">
        <h1><?= $title; ?></h1>

        <div class="form-group mt-3">
            <label for="nama">Nama</label>
            <?= $nama; ?>
        </div>

        <div class="form-group">
            <label for="no hp">No Hp</label>
            <?= $nomor; ?>
        </div>

        <div class="form-group">
            <label for="merk sepatu">Merk Sepatu</label>
            <?= $merk; ?>
        </div>

        <div class="form-group">
            <label for="ukuran sepatu">Ukuran Sepatu</label>
            <?= $ukuran; ?>
        </div>
        
        <div class="form-group">
            <label for="ukuran sepatu">Ukuran Sepatu</label>
            <?= number_format($harga); ?>
        </div>

        <div class="form-group">
            <a href="<?= base_url('toko'); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Input Lagi</a>
        </div>
    </div>
</body>
</html>