<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */

$this->breadcrumbs=array(
	'Productsoffers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Productsoffers', 'url'=>array('index')),
	array('label'=>'Create Productsoffers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productsoffers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<section class="content-header">
	<h1>Administrar Ofertas</h1>

</section>

<section class="content">

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-header">
						<a href="<?=Yii::app()->request->baseUrl;?>/ofertas/agregar" class="btn btn-success float-right"><i class="fa fa-plus"></i> Agregar</a>
					</div>
					<div class="card-body">
						<?php 
						$this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'productsoffers-grid',
							'dataProvider'=>$model->search(),
							'filter'=>$model,
							'itemsCssClass'=>'table table-hover',
							'pager' => array(
								'cssFile'=>false,
								'header'=> '',
								'firstPageLabel' => '<i class="fa fa-forward fa-flip-horizontal" data-toggle="tooltip" title="Primera página"></i>',
								'prevPageLabel'  => '<i class="fa fa-caret-right fa-flip-horizontal" data-toggle="tooltip" title="Anterior"></i>',
								'nextPageLabel'  => '<i class="fa fa-caret-right" data-toggle="tooltip" title="Siguiente"></i>',
								'lastPageLabel'  => '<i class="fa fa-forward" data-toggle="tooltip" title="Última página"></i>', 
							),
						'summaryText' => '', 

						'columns'=>array(
							'name',
							array(
							'name' => 'id_category',
							'value' => '$data->idCategory->name',
							),
							'description',
							'price',
							array(
							'class'=>'CButtonColumn',
							),
						),
						)); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	
