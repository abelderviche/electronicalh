<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */

$this->breadcrumbs=array(
	'Productsoffers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productsoffers', 'url'=>array('index')),
	array('label'=>'Manage Productsoffers', 'url'=>array('admin')),
);
?>

<h1>Create Productsoffers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>