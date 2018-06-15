<?php
/* @var $this ProductscategoriesController */
/* @var $model Productscategories */

$this->breadcrumbs=array(
	'Productscategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productscategories', 'url'=>array('index')),
	array('label'=>'Manage Productscategories', 'url'=>array('admin')),
);
?>

<h1>Create Productscategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>