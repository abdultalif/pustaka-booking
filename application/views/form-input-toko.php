<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="container">
        <h1><?= $title; ?></h1>
        <form action="<?= base_url('toko'); ?>" method="post">

            <div class="form-group mt-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?= set_value('nama'); ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="no hp">No Hp</label>
                <input type="text" class="form-control" name="no" placeholder="Masukan Nomor">
                <?= form_error('no', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="merk sepatu">Merk Sepatu</label>
                <select name="merk" class="form-control">
                    <option value="">Pilih Merk</option>
                    <?php
                        foreach ($merk as $m) {
                    ?>
                        <option value="<?= $m; ?>"><?= $m; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="ukuran sepatu">Ukuran Sepatu</label>
                <select name="ukuran" class="form-control">
                    <option value="">Pilih Ukuran</option>
                    <?php
                        for ($i = 32; $i <= 44; $i++) {
                    ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
                
        </form>
    </div>
</body>
</html>