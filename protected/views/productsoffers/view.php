<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */

$this->breadcrumbs=array(
	'Productsoffers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Productsoffers', 'url'=>array('index')),
	array('label'=>'Create Productsoffers', 'url'=>array('create')),
	array('label'=>'Update Productsoffers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Productsoffers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productsoffers', 'url'=>array('admin')),
);
?>

<h1>View Productsoffers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_category',
		'name',
		'description',
		'price',
	),
)); ?>
