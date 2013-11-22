<?php
/* @var $this ApnsDevicesController */
/* @var $model ApnsDevices */

$this->breadcrumbs=array(
	'Apns Devices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ApnsDevices', 'url'=>array('index')),
	array('label'=>'Manage ApnsDevices', 'url'=>array('admin')),
);
?>

<h1>Create ApnsDevices</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>