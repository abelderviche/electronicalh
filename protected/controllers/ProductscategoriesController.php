<?php

class ProductscategoriesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='admin_lte';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{

		$internal=array('admin','index','view','create','delete','update','insert');
		return array(
			array('deny', //no entra a ninguna accion ningun usuario que no este logueado
                'users'=>array('?'),
            ),
            array('allow', // acceden todos los usuarios autenticados a todas las acciones
				'actions'=>$internal,
				'users'=>array('@'),
            ),
			 array('deny',
                'users'=>array('*'),
            ),
        );
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Productscategories;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Productscategories']))
		{
			$model->attributes=$_POST['Productscategories'];


		//	$model->image = CUploadedFile::getInstance($model,'image');
			$model->image = $_POST['image'];
			if($model->validate())
			{
				//self::vaciarcacheimages('images');

				if($model->save()){
					if(!is_dir('images/productscategories')){
						mkdir('images/productscategories');
					}
					if(!is_dir('images/productscategories/'.$model->id)){
						mkdir('images/productscategories/'.$model->id);
					}

	      		  	$tempFile = $_POST['image_url']; 
	          		$targetPath = Yii::getPathOfAlias('webroot').'/images/productscategories/'.$model->id.'/'; 
	          	
		        	$file_name = $_POST['image']; 
		        	$targetFile =  $targetPath.$file_name;
	       
	          		if(rename($tempFile,$targetFile)){
						$this->redirect(array('admin'));
	          			
	          		}else{
	          			echo "pinto el eerror";
	          		}

				}
		}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function vaciarcacheimages($carpeta){
		foreach(glob($carpeta . "/*") as $archivos_carpeta){
			if (is_dir($archivos_carpeta)){
				self::vaciarcacheimages($archivos_carpeta);
			}else{
				unlink($archivos_carpeta);
			}
		}
		if(file_exists($carpeta)){
			//rmdir($carpeta);
		}
	}

	public function actionInsert(){
        if (!empty($_FILES)) {
          // Yii::app()->session['id_upload'] == '';  
          $random = rand(0,99999);
     		
          $tempFile = $_FILES['Productscategories']['tmp_name']['image']; 
          $targetPath = Yii::getPathOfAlias('webroot').'/images/tmp/'; 

          $file_name = $random.'_'.str_replace(' ' ,'_' ,$_FILES['Productscategories']['name']['image']); 
          $targetFile =  $targetPath.$file_name;
       

          if(move_uploaded_file($tempFile,$targetFile)){
            $to_return =  $file_name;

            Yii::app()->session['id_upload'] = $to_return;
          	echo json_encode(array('tempFile'=>$targetFile,'file_name'=>$file_name));
            //echo $to_return;
          } 
          
           
      }

    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Productscategories']))
		{
			$model->attributes=$_POST['Productscategories'];


		//	$model->image = CUploadedFile::getInstance($model,'image');
			if($_POST['image_url']!='value'){
				$model->image = $_POST['image'];
			}
			if($model->save())
			{
				//self::vaciarcacheimages('images');
				if(!is_dir('images/productscategories')){
					mkdir('images/productscategories');
				}
				if(!is_dir('images/productscategories/'.$model->id)){
					mkdir('images/productscategories/'.$model->id);
				}

				if(isset($_POST['image_url'])&&$_POST['image_url']!='value'){
					$tempFile = $_POST['image_url']; 
	          		$targetPath = Yii::getPathOfAlias('webroot').'/images/productscategories/'.$model->id.'/'; 

	          	
		        	$file_name = $_POST['image']; 
		        	$targetFile =  $targetPath.$file_name;
	       
	          		if(rename($tempFile,$targetFile)){
						$this->redirect(array('admin'));
	          			
	          		}else{
	          			echo "pinto el eerror";
	          			die();
	          		}
				}else{
					$this->redirect(array('admin'));

				}
      		  	

				/*if (!$model->image->saveAs(Yii::app()->basePath . '/../images/productsoffers/'.$model->id.'/'.$model->image)){
                                throw new Exception();
				}*/

				
				// redirect to success page
		}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Productscategories('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Productscategories']))
			$model->attributes=$_GET['Productscategories'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Productscategories('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Productscategories']))
			$model->attributes=$_GET['Productscategories'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Productscategories the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Productscategories::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Productscategories $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='productscategories-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
