<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */
/*
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
);*/
?>

		
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Editar Oferta</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=Yii::app()->request->baseUrl;?>/ofertas" >Ofertas</a></li>
          <li class="breadcrumb-item active">Editar</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>