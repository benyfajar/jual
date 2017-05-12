<?php
/* @var $this PenjualanController */
/* @var $model Penjualan */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'Penjualan'=>array('index'),
	'Laporan Per Tanggal',
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
		<?php echo $form->labelEx($model,'dari tanggal'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
					'model'=>$model,
					'attribute'=>'dari_tanggal',
					'value'=>$model->dari_tanggal,
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
			<?php echo $form->labelEx($model,'sampai_tanggal'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
			array(
					'model'=>$model,
					'attribute'=>'tanggal',
					'value'=>$model->sampai_tanggal,
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
	</div>	
	
	
<div class="row button">
		<?php echo CHtml::submitButton('Cetak');; ?>
	</div>


	<?php $this->endWidget(); ?>
</div><!--form-->