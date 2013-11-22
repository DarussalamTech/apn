<?php
/* @var $this ApnsDevicesController */
/* @var $model ApnsDevices */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pid'); ?>
		<?php echo $form->textField($model,'pid',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientid'); ?>
		<?php echo $form->textField($model,'clientid',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appname'); ?>
		<?php echo $form->textField($model,'appname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appversion'); ?>
		<?php echo $form->textField($model,'appversion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deviceuid'); ?>
		<?php echo $form->textField($model,'deviceuid',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'devicetoken'); ?>
		<?php echo $form->textField($model,'devicetoken',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'devicename'); ?>
		<?php echo $form->textField($model,'devicename',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'devicemodel'); ?>
		<?php echo $form->textField($model,'devicemodel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deviceversion'); ?>
		<?php echo $form->textField($model,'deviceversion',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pushbadge'); ?>
		<?php echo $form->textField($model,'pushbadge',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pushalert'); ?>
		<?php echo $form->textField($model,'pushalert',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pushsound'); ?>
		<?php echo $form->textField($model,'pushsound',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'development'); ?>
		<?php echo $form->textField($model,'development',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->