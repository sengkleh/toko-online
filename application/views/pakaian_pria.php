<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pakaian Pria</h1>
    </div>
    <!-- End Page Heading -->


    <!--slider-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('asset/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('asset/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    <!--end slider-->
    

  <!--card-->
    <div class="row text-center mt-4">

        <?php foreach ($pakaian_pria as $brg): ?>

            <div class="card ml-3" style="width: 16rem; ">
              <img src="<?php echo base_url().'/asset/img/' .$brg->gambar ?>" class="card-img-top">
              <div class="card-body mb-3">
                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->kategori ?></small>
                <p class="card-text"><?php echo $brg->keterangan ?></p>
                <span class="badge badge-success mb-2">Rp. <?php echo $brg->harga ?></span>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail_barang/' .$brg->id_brg, '<div class="btn btn-primary btn-sm">Detail</div>') ?>
                

              </div>
            </div>

        <?php endforeach; ?>

    </div>
    <!--end card-->

</div>
<!-- End of Content Wrapper -->


