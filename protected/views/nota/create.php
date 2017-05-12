<?php
/* @var $this NotaController */
/* @var $model Nota */

$this->breadcrumbs=array(
	'Nota'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nota', 'url'=>array('index')),
	array('label'=>'Manage Nota', 'url'=>array('admin')),
);
?>

<h1>Create Nota</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>