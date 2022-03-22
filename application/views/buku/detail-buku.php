<div class="x_panel" align="center">
    <div class="x_content">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <?php foreach ($buku as $b) { ?>
                    <div class="thumbnail" style="height: auto; position: relative; left: 100%; width: 200%;">
                        <img src="<?= base_url('assets/img/upload/') . $b->image ?>" style="max-width:100%; max-height: 100%; height: 150px; width: 120px">
                        <div class="caption">
                            <h5 style="min-height:40px;" align="center"><?= $b->pengarang ?></h5>
                            <center>
                                <table class="table table-stripped">
                                    <tr>
                                        <th nowrap>Judul Buku: </th>
                                        <td nowrap><?= $b->judul_buku; ?></td>
                                        <td>&nbsp;</td>
                                        <th>Kategori: </th>
                                        <td><?= $b->kategori; ?></td>
                                    </tr>
                                    <tr>
                                        <th nowrap>Penerbit: </th>
                                        <td><?= $b->penerbit; ?></td>
                                        <td>&nbsp;</td>
                                        <th>Dipinjam: </th>
                                        <td><?= $b->dipinjam; ?></td>
                                    </tr>
                                    <tr>
                                        <th nowrap>Tahun Terbit: </th>
                                        <td><?= substr($b->tahun_terbit, 0, 4) ?></td>
                                        <td>&nbsp;</td>
                                        <th>Dibooking: </th>
                                        <td><?= $b->dibooking; ?></td>
                                    </tr>
                                    <tr>
                                        <th>ISBN: </th>
                                        <td><?= $b->isbn; ?></td>
                                        <td>&nbsp;</td>
                                        <th>Tersedia: </th>
                                        <td><?= $b->stok; ?></td>
                                    </tr>
                                </table>
                            </center>
                            <p>
                                <a class="btn btn-outline-primary fas fw fa-shopping-cart" href="<?= base_url('booking/tambahBooking/' . $b->id_buku); ?>"> Booking</a>
                                <span class="btn btn-outline-secondary fas fw fa-reply" onclick="window.history.go(-1)"> Kembali</span>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>