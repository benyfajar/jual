<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'Penjualan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Penjualan', 'url'=>array('index')),
	array('label'=>'Create Penjualan', 'url'=>array('formKasir')),
);
?>

<div class="wide form">
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'kasir-form',
			'enableAjaxValidation'=>true,
			'enableClientValidation'=>true,
			));
?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<div class="row">
	<?php echo $form->labelEx($modelKasir,'username'); ?>
	<?php echo $form->textField($modelKasir,'username', array('value'=>Yii::app()->user->name)); ?>
</div>
<?php
//<div class="row">
 /*
	<?php echo $form->labelEx($modelKasir,'tanggal'); ?>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
					'model'=>$modelKasir,
					'attribute'=>'tanggal',
					'value'=>$modelKasir->tanggal,
						'options'=>array(
						'dateFormat'=>'yy-mm-dd',
						'showOn'=>'button',
						//'yearRange'=>'-60',
						'changeMonth'=>'true',
						'changeYear'=>'true',
						'constrainInput'=>'false',
						'duration'=>'fast',
						'showAnim'=>'slide',
						),
			'htmlOptions'=>array('size'=>20),
			)); ?>
	
</div>*/
?>
<div class="row">
	<?php echo $form->labelEx($modelKasir,'no_nota'); ?>
	<?php echo $form->textField($modelKasir,'no_nota', array('value'=>$this->nota)); ?>
</div>
<div class="row">
	<?php echo CHtml::button('Lanjutkan>>', array('submit'=>array('penjualan/create', 'nota'=>$this->nota))); ?>
</div>
<?php $this->endWidget(); ?>
</div><!--form-->