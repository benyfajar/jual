<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'Penjualan'=>array('index'),
	'Laporan Per Nota',
);

$this->menu=array(
	array('label'=>'List Penjualan', 'url'=>array('index')),
	array('label'=>'Manage Penjualan', 'url'=>array('admin')),
);
?>

<div class="wide form">
	<?php $form = $this->beginWidget('CActiveForm', array(
			'id'=>'kasir-form',
			'enableAjaxValidation'=>true,
			'enableClientValidation'=>true,
		)); 
	?>
<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'no_nota'); ?>
		<?php echo $form->textField($model,'no_nota'); ?>
	</div>	
	
	
<div class="row button">
		<?php echo CHtml::submitButton('Cetak');; ?>
	</div>


	<?php $this->endWidget(); ?>
</div><!--form-->