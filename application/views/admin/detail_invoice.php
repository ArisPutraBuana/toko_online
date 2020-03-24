<div class="container-fluid">
    <h4 class="mb-3">Detail Pesananan  
        <div class="btn btn-sm btn-primary">NO INVOICE  :  <?= $invoice->id ?></div>    
    </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <td>ID BARANG</td>
            <td>NAMA PRODUK</td>
            <td>JUMLAH PESANAN</td>
            <td>HARGA SATUAN</td>
            <td>SUB-TOTAL</td>
        </tr>

     <?php 
        $total = 0; 
     foreach ($pesanan as $psn) :
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal;
     ?>

     <tr>
        <td><?= $psn->id_brg ?></td>
        <td><?= $psn->nama_brg ?></td>
        <td><?= $psn->jumlah?></td>
        <td><?= number_format($psn->harga, 0,',','.') ?></td>
        <td><?= number_format($subtotal, 0,',','.') ?></td>
     </tr>

     <?php endforeach; ?>

     <tr>
        <td colspan="4" class="text-right">Grand Total</td>
        <td class="text-right">Rp. <?= number_format($total, 0,',','.') ?></td>
     </tr>

    </table>

    <a href="<?= base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>


</div>