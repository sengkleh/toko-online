<div class="container-fluid">
    <div class="row">
        <div class ="col-md-2"></div>
        <div class ="col-md-8">
            <h3>Pembayaran</h3>
            <div class ="btn btn-sm btn-success">
                <?php 
                    $total = 0;
                    if ($keranjang = $this->cart->contents())
                    {
                      //  foreach ($total as $items)
                      //  {
                      //     $total = $total + $items['subtotal'];
                      // }
                    echo "Total Belanja Anda : Rp.".number_format ($this->cart->total(),0,',','.');
                    }
                ; ?>
            </div><br><br><br>

            <form method ="post" action="<?php echo base_url() ?> dashboard/proses_pesanan ">
            <div class="form-group">
                    <label for="nama_brg">Nama</label>
                    <input type="text" class="form-control" name="nama_brg" id="nama_brg">
                </div>
                <div class="form-group">
                    <label for="alamat lengkap">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="alamat lengkap" id="alamat lengkap">
                </div>
                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telpon" id="telepon">
                </div>
                <div class="form-group">
                <label for="nama_brg">Jasa Pengiriman</label>
                <select class="custom-select custom-select-md mb-3">
                    <option value="1">Jne</option>
                    <option value="2">J&t</option>
                    <option value="3">Sicepat</option>
                </select>
                </div>
                <div class="form-group">
                <label for="nama_brg">Jenis Pembayaran</label>
                <select class="custom-select custom-select-md mb-3">
                <option selected>--Pilih Pembayaran--</option>
                    <option value="1">Bca 711 xxx xxx</option>
                    <option value="2">Mandiri 967 xxx xxx</option>
                    <option value="2">Mandiri 201 xxx xxx</option>                  
                </select>
                </div>
                
                <button type = "submit" class = "btn btn-sm btn-success">Transaksi</button>

            </form>

        </div>
        <div class ="col-md-2"></div>
    </div>
</div>


