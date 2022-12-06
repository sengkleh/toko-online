<div class="container-fluid">
 

              <?php foreach ($barang as $brg) { ?>
                
                <form method="post" action="<?php echo base_url().'admin/data_barang/update'; ?>"> 

                <div class="form-group">
                  <label for="nama_brg">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_brg" id="nama_brg" value="<?php echo $brg->nama_brg ?>" >
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="hidden" class="form-control" name="id_brg" id="id_brg" value="<?php echo $brg->id_brg ?>">
                  <input type="text" class="form-control" name="keterangan" id="keterangan" value="<?php echo $brg->keterangan ?>">
                </div>
                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <input type="text" class="form-control" name="kategori" id="kategori" value="<?php echo $brg->kategori ?>">
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $brg->harga ?>">
                </div>
                <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="number" class="form-control" name="stok" id="stok" value="<?php echo $brg->stok ?>">
                </div>

                  <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
              </form>
              
             <?php } ?>           <!-- End Modal -->

</div>