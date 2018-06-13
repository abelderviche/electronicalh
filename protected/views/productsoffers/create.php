<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */
/*
$this->breadcrumbs=array(
	'Productsoffers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productsoffers', 'url'=>array('index')),
	array('label'=>'Manage Productsoffers', 'url'=>array('admin')),
);*/
?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Crear Oferta</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=Yii::app()->request->baseUrl;?>/ofertas" >Ofertas</a></li>
          <li class="breadcrumb-item active">Crear</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

