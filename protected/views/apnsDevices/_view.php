<?php
/* @var $this ApnsDevicesController */
/* @var $data ApnsDevices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pid), array('view', 'id'=>$data->pid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientid')); ?>:</b>
	<?php echo CHtml::encode($data->clientid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appname')); ?>:</b>
	<?php echo CHtml::encode($data->appname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appversion')); ?>:</b>
	<?php echo CHtml::encode($data->appversion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deviceuid')); ?>:</b>
	<?php echo CHtml::encode($data->deviceuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('devicetoken')); ?>:</b>
	<?php echo CHtml::encode($data->devicetoken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('devicename')); ?>:</b>
	<?php echo CHtml::encode($data->devicename); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('devicemodel')); ?>:</b>
	<?php echo CHtml::encode($data->devicemodel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deviceversion')); ?>:</b>
	<?php echo CHtml::encode($data->deviceversion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pushbadge')); ?>:</b>
	<?php echo CHtml::encode($data->pushbadge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pushalert')); ?>:</b>
	<?php echo CHtml::encode($data->pushalert); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pushsound')); ?>:</b>
	<?php echo CHtml::encode($data->pushsound); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('development')); ?>:</b>
	<?php echo CHtml::encode($data->development); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>