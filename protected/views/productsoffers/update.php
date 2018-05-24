<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */

$this->breadcrumbs=array(
	'Productsoffers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productsoffers', 'url'=>array('index')),
	array('label'=>'Create Productsoffers', 'url'=>array('create')),
	array('label'=>'View Productsoffers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Productsoffers', 'url'=>array('admin')),
);
?>

<h1>Update Productsoffers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>