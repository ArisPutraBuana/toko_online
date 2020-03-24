<div class="container-fluid">

<div class="row">
    <div class="col-6">

    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

        <?php foreach ($barang as $brg) : ?>
        
        <form method="post" action="<?= base_url().'admin/data_barang/update'; ?>">
        
        <div class="form-group">
                <label for="">NAMA BARANG</label>
                <input type="hidden" name="id_brg" value="<?= $brg->id_brg ?>" class="form-control">

                <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>" required>
            </div>
            <div class="form-group">
                <label for="">KETERANGAN</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>" required>
            </div>
            <div class="form-group">
                <label for="">KETEGORI</label>
                  <select name="kategori" class="form-control" required> 
                    <option value="<?= $brg->kategori ?>"><?= $brg->kategori ?></option>
                    <option>Elektronik</option>
                    <option>Pakaian Pria</option>
                    <option>Pakaian Wanita</option>
                    <option>Pakaian Anak-anak</option>
                    <option>Peralatan Olaraga</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="">HARGA</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>" required>
            </div>
            <div class="form-group">
                <label for="">STOK</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>" required>
            </div>
            <br>
            <div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

        <?php endforeach; ?>

        </div>

        <div class="col-6"></div>
        </div>
</div>