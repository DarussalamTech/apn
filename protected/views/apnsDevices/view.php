<?php
/* @var $this ApnsDevicesController */
/* @var $model ApnsDevices */

$this->breadcrumbs=array(
	'Apns Devices'=>array('index'),
	$model->pid,
);

$this->menu=array(
	array('label'=>'List ApnsDevices', 'url'=>array('index')),
	array('label'=>'Create ApnsDevices', 'url'=>array('create')),
	array('label'=>'Update ApnsDevices', 'url'=>array('update', 'id'=>$model->pid)),
	array('label'=>'Delete ApnsDevices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ApnsDevices', 'url'=>array('admin')),
);
?>

<h1>View ApnsDevices #<?php echo $model->pid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pid',
		'clientid',
		'appname',
		'appversion',
		'deviceuid',
		'devicetoken',
		'devicename',
		'devicemodel',
		'deviceversion',
		'pushbadge',
		'pushalert',
		'pushsound',
		'development',
		'status',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
