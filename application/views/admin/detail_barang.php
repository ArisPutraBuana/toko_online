<div class="container-fluid">
    <h4 class="mb-3">Detail Data Barang </h4>

    <table class="table table-bordered table-hover table-striped text-center">
        <tr>
            <td>NAMA PRODUK</td>
            <td>KETERANGAN</td>
            <td>KATEGORI</td>
            <td>HARGA</td>
            <td>STOK</td>
            <td>GAMBAR</td>
        </tr>

        <?php foreach ($detail as $dt) : ?>
            <tr>
                <td><?= $dt->nama_brg ?></td>
                <td><?= $dt->keterangan ?></td>
                <td><?= $dt->kategori ?></td>
                <td><?= number_format($dt->harga, 0,',','.'); ?></td>
                <td><?= $dt->stok ?></td>
                <td><img src="<?= base_url('assets/img/').$dt->gambar; ?>" width="50px" height="50px"></td>
            </tr>

        <?php endforeach; ?>

    </table>

    <a href="<?= base_url('admin/data_barang/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>


</div>