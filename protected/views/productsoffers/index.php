<?php
/* @var $this ProductsoffersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productsoffers',
);

$this->menu=array(
	array('label'=>'Create Productsoffers', 'url'=>array('create')),
	array('label'=>'Manage Productsoffers', 'url'=>array('admin')),
);
?>

<h1>Productsoffers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
