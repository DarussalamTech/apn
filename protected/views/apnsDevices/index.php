<?php
/* @var $this ApnsDevicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Apns Devices',
);

$this->menu=array(
	array('label'=>'Create ApnsDevices', 'url'=>array('create')),
	array('label'=>'Manage ApnsDevices', 'url'=>array('admin')),
);
?>

<h1>Apns Devices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
