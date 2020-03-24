<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="btn btn-sm btn-success">

                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                 {   
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }    
                    echo "<h4> Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                 ?>

            </div>
                <h3 class="mt-3">Input Alamat Pengiriman dan Pembayaran</h3>

                <form method="post" action="<?= base_url().'dashboard/proses_pesanan'; ?>">
                
                    <div class="form-group">
                        <label for="">NAMA LENGKAP</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda.." required>
                    </div>
                    <div class="form-group">
                        <label for="">ALAMAT LENGKAP</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda.." required>
                    </div>
                    <div class="form-group">
                        <label for="">NO HANDPHONE</label>
                        <input type="text" name="no_tlp" class="form-control" placeholder="No Handphone Anda.." required>
                    </div>
                    <div class="form-group">
                        <label for="">JASA PENGIRIMAN</label>
                        <select name="jasa_pengiriman" id="" class="form-control">
                            <option value="">JNE</option>
                            <option value="">TIKI</option>
                            <option value="">POS Indonesia</option>
                            <option value="">GOJEK</option>
                            <option value="">GRAB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">PILIH BANK</label>
                        <select name="bank" id="" class="form-control">
                            <option value="">BCA - XXXXXXX</option>
                            <option value="">BNI - XXXXXXX</option>
                            <option value="">BRI - XXXXXXX</option>
                            <option value="">MANDIRI - XXXXXXX</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary mb-5">Pesan</button>

                </form>

                <?php } else 
                  {
                     echo "<h4> Keranjang Belanja Anda masih kosong";
                  } ?>

                </div>

        <div class="col-md-6"></div>

    </div>
</div>