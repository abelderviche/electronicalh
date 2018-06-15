<?php
/* @var $this ProductscategoriesController */
/* @var $model Productscategories */

$this->breadcrumbs=array(
	'Productscategories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productscategories', 'url'=>array('index')),
	array('label'=>'Create Productscategories', 'url'=>array('create')),
	array('label'=>'View Productscategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Productscategories', 'url'=>array('admin')),
);
?>

<h1>Update Productscategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>