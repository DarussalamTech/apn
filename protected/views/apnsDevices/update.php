<?php
/* @var $this ApnsDevicesController */
/* @var $model ApnsDevices */

$this->breadcrumbs=array(
	'Apns Devices'=>array('index'),
	$model->pid=>array('view','id'=>$model->pid),
	'Update',
);

$this->menu=array(
	array('label'=>'List ApnsDevices', 'url'=>array('index')),
	array('label'=>'Create ApnsDevices', 'url'=>array('create')),
	array('label'=>'View ApnsDevices', 'url'=>array('view', 'id'=>$model->pid)),
	array('label'=>'Manage ApnsDevices', 'url'=>array('admin')),
);
?>

<h1>Update ApnsDevices <?php echo $model->pid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>