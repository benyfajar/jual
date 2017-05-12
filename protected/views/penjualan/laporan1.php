<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'Penjualan'=>array('index'),
	'Laporan Per Nota'=>array('formLapPerNota'),
	'Laporan1',
);

$this->menu=array(
	array('label'=>'List Penjualan', 'url'=>array('index')),
	array('label'=>'Manage Penjualan', 'url'=>array('admin')),
);
?>

<h1>Strok Pembayaran No: <?php echo $_GET['no_nota']; ?></h1>
<table class="dataGrid">
<tr>
	<th>KD</th>
	<th>NAMA BARANG</th>
	<th>QTY</th>
	<th>SATUAN</th>
	<th>HARGA</th>
	<th>TOTAL</th>
</tr>
<?php
	$hasil= $model->findAll(array('condition'=>'no_nota=:no_nota',
		'params'=>array(':no_nota'=>$_GET['no_nota'])));
		$jum=0;
		foreach ($hasil as $has) {
		?>
		<tr>
			<td><?php echo $has->barang_id ; ?></td>
			<td><?php echo $has->barang->nama_barang ; ?></td>
			<td> <div align='left'>
				<?php echo $has->qty ; ?> </div>
			</td>
			<td><?php echo $has->barang->satuan ; ?></td>
			<td><div align='left'>
				<?php echo number_format($has->barang->harga); ?>
			</div></td>
			<td> <div align='left'>
				<?php echo number_format($has->barang->harga * $has->qty); ?>
			</div></td>
		</tr>
		<?php
			$jum+=$has->barang->harga*$has->qty;
		}
		?>
		<td colspan="5" scope="row">JUMLAH</td>
		<td> <div align='left'><?php echo number_format($jum); ?> </div> </td>
</table>