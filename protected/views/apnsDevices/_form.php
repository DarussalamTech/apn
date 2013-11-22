<?php
/* @var $this ApnsDevicesController */
/* @var $model ApnsDevices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apns-devices-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clientid'); ?>
		<?php echo $form->textField($model,'clientid',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'clientid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appname'); ?>
		<?php echo $form->textField($model,'appname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'appname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appversion'); ?>
		<?php echo $form->textField($model,'appversion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'appversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deviceuid'); ?>
		<?php echo $form->textField($model,'deviceuid',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'deviceuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'devicetoken'); ?>
		<?php echo $form->textField($model,'devicetoken',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'devicetoken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'devicename'); ?>
		<?php echo $form->textField($model,'devicename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'devicename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'devicemodel'); ?>
		<?php echo $form->textField($model,'devicemodel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'devicemodel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deviceversion'); ?>
		<?php echo $form->textField($model,'deviceversion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'deviceversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pushbadge'); ?>
		<?php echo $form->textField($model,'pushbadge',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'pushbadge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pushalert'); ?>
		<?php echo $form->textField($model,'pushalert',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'pushalert'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pushsound'); ?>
		<?php echo $form->textField($model,'pushsound',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'pushsound'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'development'); ?>
		<?php echo $form->textField($model,'development',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'development'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->