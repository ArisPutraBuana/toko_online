<div class="container-fluid">
    <h4 class="mb-3">Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <td>ID INVOICE</td>
            <td>NAMA PEMESAN</td>
            <td>ALAMAT PENGIRIMAN</td>
            <td>TANGGAL PESANAN</td>
            <td>BATAS PEMBAYARAN</td>
            <td>AKSI</td>
        </tr>

      <?php foreach ($invoice as $inv) : ?>
        <tr>
            <td><?= $inv->id ?></td>
            <td><?= $inv->nama ?></td>
            <td><?= $inv->alamat ?></td>
            <td><?= $inv->tgl_pesan ?></td>
            <td><?= $inv->batas_bayar ?></td>
            <td><?= anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div></td>'); ?>
        </tr>
      <?php endforeach; ?>

    </table>
</div>