<!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-book"></i>Data Barang</h3>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Barang</button>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th colspan="3">Aksi</th>
                            </tr>
                        </thead>

                        <?php 
                            $no = 1;
                            foreach ($barang as $brg) : ?>

                        <tbody> 
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $brg->nama_brg ?></td>
                                <td><?php echo $brg->keterangan ?></td>
                                <td><?php echo $brg->kategori ?></td>
                                <td><?php echo $brg->harga ?></td>
                                <td><?php echo $brg->stok ?></td>
                                <td><?php echo anchor('admin/data_barang/detail/' .$brg->id_brg, '<div class="btn btn-success btn-sm ml-auto"><i class="fa-solid fa-eye"></i></div>') ?>                                    
                                </td>
                                <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<button type="button" class="btn btn-primary btn-sm ml-auto"><i class="fa-solid fa-pen"></i></button>') ?>
                                </td>
                                <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<button type="button" class="btn btn-danger btn-sm ml-auto"><i class="fa-solid fa-trash-can"></i></button>') ?>
                                </td>
                        </tbody>

                        <?php endforeach; ?>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-plus"></i>Form Tambah Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <?php echo form_open_multipart ('admin/data_barang/tambah_data'); ?>  

                                  <div class="form-group">
                                    <label for="nama_brg">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_brg" id="nama_brg">
                                  </div>
                                  <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan">
                                  </div>
                                  <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" class="form-control" name="kategori" id="kategori">
                                  </div>
                                  <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" id="harga">
                                  </div>
                                  <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" class="form-control" name="stok" id="stok">
                                  </div>
                                  <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" id="gambar">
                                  </div>

                                  <div class="modal-footer">
                                    <button type="reset" action="v_mahasiswas" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Reset</button>
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                  </div>

                                <?php echo form_close(); ?>
                              </div>


                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<!-- Button trigger modal -->


