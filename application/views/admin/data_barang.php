<div class="container-fluid">

    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3" class="text-center">AKSI</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($barang as $brg) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $brg->nama_brg ?></td>
                <td><?= $brg->keterangan ?></td>
                <td><?= $brg->kategori ?></td>
                <td><?= $brg->harga ?></td>
                <td><?= $brg->stok ?></td>
                <td>
                    <?= anchor('admin/data_barang/detail/'.$brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>'); ?></td>
                    <td>
                    <?= anchor('admin/data_barang/hapus/'.$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?>
                    </td>
                    <td><?= anchor('admin/data_barang/edit/'.$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>
                </td>
            </tr>
          <?php $no++ ;?>
        <?php endforeach; ?>  

    </table>

</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><b>From Input Produk<b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
        <form method="post" action="<?= base_url().'admin/data_barang/tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">NAMA BARANG</label>
                <input type="text" name="nama_brg" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">KETERANGAN</label>
                <input type="text" name="keterangan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">KETEGORI</label>
                  <select class="form-control" name="kategori">
                    <option>Elektronik</option>
                    <option>Pakaian Pria</option>
                    <option>Pakaian Wanita</option>
                    <option>Pakaian Anak-anak</option>
                    <option>Peralatan Olaraga</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="">HARGA</label>
                <input type="text" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">STOK</label>
                <input type="text" name="stok" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">GAMBAR PRODUK</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>
            <br>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>

        </form>    
      </div>
    </div>
  </div>
</div>
</div>
