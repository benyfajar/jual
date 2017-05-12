<?php
/* @var $this NotaController */
/* @var $model Nota */

$this->breadcrumbs=array(
	'Nota'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nota', 'url'=>array('index')),
	array('label'=>'Create Nota', 'url'=>array('create')),
	array('label'=>'Update Nota', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nota', 'url'=>array('admin')),
);
?>

<h1>View Nota #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'no_nota',
	),
)); ?>
