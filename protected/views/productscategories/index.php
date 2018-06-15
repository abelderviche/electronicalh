<?php
/* @var $this ProductscategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productscategories',
);

$this->menu=array(
	array('label'=>'Create Productscategories', 'url'=>array('create')),
	array('label'=>'Manage Productscategories', 'url'=>array('admin')),
);
?>

<h1>Productscategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
