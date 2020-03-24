<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?= base_url('assets/img/slider/slider1.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/slider/slider2.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

<!-- Kategori Produk -->
    <div class="row text-center mt-4">
        <?php foreach ($peralatan_olaraga as $brg) :?>
            <div class="card ml-3 mb-4" style="width: 16rem;">
                <img src="<?= base_url().'assets/img/'.$brg->gambar ?>" class="card-img-top" width="50px" height="100px">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $brg->nama_brg ?></h5>
                    <small><?= $brg->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg->harga, 0, ',','.'); ?></span>

                    <?= anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'); ?>
                    <?= anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>'); ?>
                </div>
                </div>
        <?php endforeach; ?>     

    </div>
</div>