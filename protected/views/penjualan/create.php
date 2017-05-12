<!--CSS untuk membuat tabel-->
<style>
	table.dataGrib
	{
		border-collapse: collapse;
		border :1px solid black;
		width: 100%;
		#font-size: 8px;
	}

	table.dataGrid td
	{
		border: 1px solid black;
		padding: 5px 5px 5px 5px;
	}

	table.dataGrid td.tot
	{
		border: 1px solid black;
		padding: 5px 5px 5px 5px;
		background: lightgrey;
	}
	table.dataGrid tr.ganjil:hover,
	table.dataGrid tr.genap:hover
	{
		background:lightblue;
	}
	table.dataGrid tr.genap
	{
		background:dimegray;
	}
	table.dataGrid tr.ganjil
	{
		background:lightgrey;
	}

	table.dataGrid th
	{
		 border:1px solid black;
		 background:lightgrey;
		 color:black;
	}
</style>
</style>
<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */

$this->breadcrumbs=array(
	'Penjualans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penjualan', 'url'=>array('index')),
	array('label'=>'Manage Penjualan', 'url'=>array('admin')),
);
?>

<h1>Create Penjualan</h1>
<?php $this->renderPartial('_formTransaksi', array('modelBaru'=>$modelBaru)); ?>

 <table class="dataGrid">
<tr> <th>KD</th>
     <th>NAMA BARANG</th>
	 <th>QTY</th>
	 <th>SATUAN</th>
	 <th>HARGA</th>
	 <th>TOTAL</th>
</tr> 
<?php
	$hasil=$model->model()->findAll(array('condition'=>'no_nota=:no_nota', 'params'=>array(':no_nota'=>$this->nota)));
	 $jum=0;
   foreach ($hasil as $has)
    {
?>   
  	 <tr>
	 <td><?php echo $has->barang_id; ?></td>
	 <td><?php echo $has->barang->nama_barang; ?></td>
	 <td><div align="right"><?php echo $has->qty;?></div></td>	 
	 <td><?php echo $has->barang->satuan;?></td>	 
	 <td><div align="right"><?php echo number_format($has->barang->harga); ?></div></td>
	 <td><div align="right"><?php echo number_format($has->barang->harga*$has->qty); ?></div></td>
	 </tr>
  <?php	 $jum+=$has->barang->harga*$has->qty;
    } ?>
	<tr>
    <td colspan="5" scope="row"> JUMLAH</td>
	<td><div align="right"><?php echo number_format($jum); ?> </div></td>
	</tr>

</table>  

<?php echo CHtml::button('Selesai', array('submit' => array('penjualan/formKasir'))); ?>
<?php //$this->renderPartial('_formTransaksi', array('modelBaru'=>$modelBaru)); ?>