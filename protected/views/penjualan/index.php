<?php
/* @var $this PenjualanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penjualan',
);

$this->menu=array(
	array('label'=>'Create Penjualan', 'url'=>array('formKasir')),
	array('label'=>'Manage Penjualan', 'url'=>array('admin')),
);
?>

<h1>Penjualans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
