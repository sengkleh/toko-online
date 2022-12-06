<div class="container-fluid">
	<h3>Detail Keranjang</h3>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>Nomor</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
			$no=1;
			foreach ($this->cart->contents() as $items) : 
		 ?>

		 <tr>
		 	<td><?php echo $no++ ?></td>
		 	<td><?php echo $items['name'] ?></td>
		 	<td><?php echo $items['qty'] ?></td>
		 	<td align="right"><?php echo  number_format($items['price'],0,',','.') ?></td>
		 	<td align="right"><?php echo number_format ($items['subtotal'],0,',','.') ?></td>
		 </tr>

		<?php endforeach; ?>
		<tr>
			<td colspan="4"><strong>Sub-Total</strong></td>
			<td align="right"><strong><?php echo number_format ($this->cart->total(),0,',','.') ?></strong></td>
		</tr>
		
	</table>

	<a href="<?php echo base_url('dashboard/index') ?> "> <div class="btn btn-primary btn-sm">Kembali</div></a>
	<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"> <div class="btn btn-success btn-sm">Hapus Keranjang</div></a>
	<a href="<?php echo base_url('dashboard/bayar_produk') ?>"> <div class="btn btn-danger btn-sm">Lanjut Belanja</div></a>
	
</div>