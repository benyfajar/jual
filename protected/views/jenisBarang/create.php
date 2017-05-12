<?php
/* @var $this JenisBarangController */
/* @var $model JenisBarang */

$this->breadcrumbs=array(
	'Jenis Barang'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisBarang', 'url'=>array('index')),
	array('label'=>'Manage JenisBarang', 'url'=>array('admin')),
);
?>

<h1>Create JenisBarang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>