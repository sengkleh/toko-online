<div class="container-fluid">
	<div class="card">
		<h3 class="card-body">Detail Barang</h3>
				
		<?php foreach($detail as $brg): ?>
			<div class="content">
			<div class="row">
	  			
  				<div class="col-md-4">		        
  					<img src="<?php echo base_url(). '/asset/img/'.$brg->gambar ?>" class="card-img-top">
  				</div>	

  				<div class="col-md-6">
  					<table class="table">
  						<tr>
  							<td>Nama Produk</td>
  							<td><strong>:<?php echo $brg->nama_brg ?></strong></td>
  						</tr>
  						<tr>
  							<td>Keterangan</td>
  							<td><strong>:<?php echo $brg->keterangan ?></strong></td>
  						</tr>
  						<tr>
  							<td>Kategori</td>
  							<td><strong>:<?php echo $brg->kategori ?></strong></td>
  						</tr>
  						<tr>
  							<td>Stok</td>
  							<td><strong>:<?php echo $brg->stok ?></strong></td>
  						</tr>
  						<tr>
  							<td>Harga</td>
  							<td><strong>: Rp.<div class="btn btn-success btn-sm"><?php echo number_format($brg->harga,0,',','.')  ?></div></strong></td>
  						</tr>
  					</table>

  					<a href="<?php echo base_url('dashboard/index') ?> "> <div class="btn btn-primary btn-sm">Kembali</div></a>
  						
  					 					
  				</div>  				  			
  				</div>
	  		</div>
	  		<?php endforeach; ?>
	  		
	</div>
</div>