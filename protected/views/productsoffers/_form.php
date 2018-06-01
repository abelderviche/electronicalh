<?php
/* @var $this ProductsoffersController */
/* @var $model Productsoffers */
/* @var $form CActiveForm */
?>
<link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/css/dropzone.css">


<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">
		            	<h3 class="card-title">Editando oferta</h3>
		            </div>
		            <?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'productsoffers-form',
					// Please note: When you enable ajax validation, make sure the corresponding
					// controller action is handling ajax validation correctly.
					// There is a call to performAjaxValidation() commented in generated controller code.
						// See class documentation of CActiveForm for details on this.
						'enableAjaxValidation'=>false,
						'htmlOptions' => array('enctype' => 'multipart/form-data'),
					)); ?>
					<?php echo $form->errorSummary($model); ?>
					
					<div class="card-body">
				        <div class="form-group">
				            <?php echo $form->labelEx($model,'id_category'); ?>
							<?php echo $form->dropDownList($model, 'id_category',CHtml::listData(Productscategories::model()->findAll(), 'id', 'name'),array('empty' => 'Seleccione','class'=>'form-control'));?>
							<?php echo $form->error($model,'id_category'); ?>
				        </div>
				        <div class="form-group">
							<?php echo $form->labelEx($model,'name'); ?>
							<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
							<?php echo $form->error($model,'name'); ?>
				        </div>
				        <div class="form-group">
							<?php echo $form->labelEx($model,'description'); ?>
							<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
							<?php echo $form->error($model,'description'); ?>
				        </div>
				        <div class="form-group">
				        	<?php echo $form->labelEx($model,'price'); ?>
							<?php echo $form->textField($model,'price',array('class'=>'form-control')); ?>
							<?php echo $form->error($model,'price'); ?>
				        </div>

				        <?php if($model->isNewRecord!='1'){ ?>
						<div class="row">
							 <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/productsoffers/'.$model->id.'/'.$model->image,"image",array("width"=>200)); ?>  
						</div>
						<?php } ?>
				        <div class="form-group">
				        	<?php  echo CHtml::hiddenField('image' , 'value', array('id' => 'hiddenInput'));
				        		   echo CHtml::hiddenField('image_url' , 'value', array('id' => 'hiddenFileUrl'));
				        	 ?>

				        	<?php 

				        		echo $form->labelEx($model,'image'); 

				        		$this->widget('EDropzone', array(
							    'model' => $model,
							    'attribute' => 'image',
							    'url' => $this->createUrl('productsoffers/insert'),
							    'mimeTypes' => array('image/jpeg', 'image/png'),
							    'onSuccess' => 'succcesupload',
							 //   'onAddedfile' => 'addedfile',
							    'options' => array('addRemoveLinks'=>true,'maxFiles'=>1),
							   //	 'init' => "js:function(){this.on('success',$this->onSuccess);}"
							));
			        	 ?>
			        	<!--<?php echo $form->labelEx($model, 'image'); ?>
			        	<div class="custom-file">
          					<?php echo $form->fileField($model, 'image',array('class'=>'custom-file-input')); ?>
          				</div>
						<?php echo $form->error($model, 'image'); ?>-->
			        </div>
				</div>
				<div class="card-footer">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>
				<?php $this->endWidget(); ?>
				</div>
			</div>
		</div>
	</div>
</section>



<script type="text/javascript">
	function succcesupload(file ,response){
		var imageResponse = JSON.parse(response);
		if($('#hiddenInput').val() == 'value'){
			$('#hiddenInput').val(imageResponse.file_name);
		}else{
			var before =  $('#hiddenInput').val();
			$('#hiddenInput').val(before +','+imageResponse.file_name);
		}

		if($('#hiddenFileUrl').val() == 'value'){
			$('#hiddenFileUrl').val(imageResponse.tempFile);
		}else{
			var before =  $('#hiddenFileUrl').val();
			$('#hiddenFileUrl').val(before +','+imageResponse.tempFile);
		}
	}
	function addedfile(file ,response){
	console.log(file);		
	console.log(response);		
	}
</script>


<?php // Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/dropzone.js',CClientScript::POS_END); ?>
