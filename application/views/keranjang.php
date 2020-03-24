<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH</th>
            <th>HARGA</th>
            <th>SUB TOTAL</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <!--   number_format($items['price'], 0, ',','.'    --> <!-- Cara Membuat FORMAT RUPIAH-->
                <td class="text-right">Rp. <?= number_format($items['price'], 0, ',','.'); ?></td> 
                <td class="text-right">Rp. <?= number_format($items['subtotal'], 0, ',','.'); ?></td>
            </tr>
         <?php $no++; ?>
        <?php endforeach; ?>

            <tr>
                <td class="text-right" colspan="5">Rp. <?= number_format($this->cart->total(), 0, ',','.'); ?></td>
            </tr>

    </table>

    <div class="text-right">
        <a href="<?= base_url('dashboard/hapus_keranjang'); ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?= base_url('welcome'); ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?= base_url('dashboard/pembayaran'); ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>

</div>