<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>

<div class="login-box">
  <div class="login-logo">
    <a href="<?=Yii::app()->request->baseUrl;?>"><b>Electronica</b>LH</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
		<p class="login-box-msg">Conectar para administrar</p>
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
				'validateOnSubmit'=>true,
				),
			)); ?>
        <div class="form-group has-feedback">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'username'); ?>
        </div>
        <div class="form-group has-feedback">
          	<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'password'); ?>
        </div>
        <div class="row">
          <div class="col-8">
           	<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
          </div>
          <!-- /.col -->
          <div class="col-4">
			<?php echo CHtml::submitButton('Loguearse',array('class'=>'btn btn-primary btn-block btn-flat')); ?>
          </div>
          <!-- /.col -->
        </div>
	<?php $this->endWidget(); ?>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->