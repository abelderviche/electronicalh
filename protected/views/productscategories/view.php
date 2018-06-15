<?php
/* @var $this ProductscategoriesController */
/* @var $model Productscategories */

$this->breadcrumbs=array(
	'Productscategories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Productscategories', 'url'=>array('index')),
	array('label'=>'Create Productscategories', 'url'=>array('create')),
	array('label'=>'Update Productscategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Productscategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productscategories', 'url'=>array('admin')),
);
?>

<h1>View Productscategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'enabled',
		'description',
		'image',
	),
)); ?>
