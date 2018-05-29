<?php

// this file must be stored in:
// protected/components/WebUser.php

class WebUser extends CWebUser {

	// Store model to not repeat query.
	private $_model;

	// Return first name.
	// access it by Yii::app()->user->first_name
	public function getModel(){
		$user = $this->loadUser(Yii::app()->user->id);
		return $user;
	}

	function getUsername(){
		$user = $this->loadUser(Yii::app()->user->id);
		return $user->username;
	}

	function getName(){
		$user = $this->loadUser(Yii::app()->user->id);
		return ucfirst($user->name);
	}


	function getLastname(){
		$user = $this->loadUser(Yii::app()->user->id);
		return ucfirst($user->lastname);
	}

 	function getImage(){
		$user = $this->loadUser(Yii::app()->user->id);
		return $user->image;
	}

	function getRoles(){
		$user = $this->loadUser(Yii::app()->user->id);
		return $user->perfiles;
	}

	public function checkAccess($operation, $params=null, $allowCaching = true){
		$roles=Yii::app()->user->getRules($params);
		if (in_array($operation, $roles)) {
			return true;
		}else{
			return false;
		}
	}

	public function Breadcrumbbyid($id_menu){
		$menu_padre='';
		$url_actual='';
		$breadcrumb='<ol class="breadcrumb">';
		$model=Profilemenu::model()->findByPk($id_menu);
		$url_actual=$model->url;
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					$menu_padre=$menu->menu->menu->title;
				}
			}
		}
		$breadcrumb.='<li><a href="'.Yii::app()->getBaseUrl(true).'"><i class="fa fa-home"></i> Inicio</a></li>';
		if($menu_padre!=''){
			$breadcrumb.='<li>'.$menu_padre.'</li>';
		}
		$breadcrumb.='<li><a href="'.Yii::app()->getBaseUrl(true).'/'.$model->url.'">'.$model->title.'</a></li></ol>';
		return $breadcrumb;

	}

	public function Breadcrumb(){
		$menu_padre='';
		$url_actual='';
		$breadcrumb='<ol class="breadcrumb">';
		foreach(Yii::app()->components['urlManager']->rules as $key => $value){
			if(strpos($value,'/')==false  || in_array($value,Yii::app()->components['urlManager']->indirect)){
				if(Yii::app()->getController()->getId()==$value){
					$url_actual=$key;
				}
			}
		}
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					$menu_padre=$menu->menu->menu->title;
				}
			}
		}
		//$breadcrumb.='<li><a href="'.Yii::app()->request->baseUrl.'"><i class="fa fa-home"></i> Inicio</a></li>';
		$breadcrumb.='<li><a href="'.Yii::app()->getBaseUrl(true).'"><i class="fa fa-home"></i> Inicio</a></li>';
		if($menu_padre!=''){
			$breadcrumb.='<li>'.$menu_padre.'</li>';
		}
		$breadcrumb.='</ol>';
		return $breadcrumb;

	}

	public function Breadcrumb_nocss(){
		$menu_padre='';
		$url_actual='';
		$breadcrumb='<ol class="breadcrumb breadcrumb_p">';
		foreach(Yii::app()->components['urlManager']->rules as $key => $value){
			if(strpos($value,'/')==false  || in_array($value,Yii::app()->components['urlManager']->indirect)){
				if(Yii::app()->getController()->getId()==$value){
					$url_actual=$key;
				}
			}
		}
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					$menu_padre=$menu->menu->menu->title;
				}
			}
		}
		$breadcrumb.='<li><a href="'.Yii::app()->getBaseUrl(true).'"><i class="fa fa-home"></i> Inicio</a></li>';
		if($menu_padre!=''){
			$breadcrumb.='<li>'.$menu_padre.'</li>';
		}
		$breadcrumb.='</ol>';
		return $breadcrumb;

	}

	public function id_menu(){
		$url_actual='';
		foreach(Yii::app()->components['urlManager']->rules as $key => $value){
			if(strpos($value,'/')==false  || in_array($value,Yii::app()->components['urlManager']->indirect)){
				if(Yii::app()->getController()->getId()==$value){
					$url_actual=$key;
				}
			}
		}
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					return $menu->menu->id;
				}
			}
		}
	}

	public function Title(){
		$url_actual='';
		foreach(Yii::app()->components['urlManager']->rules as $key => $value){
			if(strpos($value,'/')==false  || in_array($value,Yii::app()->components['urlManager']->indirect)){
				if(Yii::app()->getController()->getId()==$value){
					$url_actual=$key;
				}
			}
		}
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					return '<h1>'.$menu->menu->title.'</h1>';
				}
			}
		}
	}

	public function Title_nocss(){
		$url_actual='';
		foreach(Yii::app()->components['urlManager']->rules as $key => $value){
			if(strpos($value,'/')==false  || in_array($value,Yii::app()->components['urlManager']->indirect)){
				if(Yii::app()->getController()->getId()==$value){
					$url_actual=$key;
				}
			}
		}
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					return $menu->menu->title;
				}
			}
		}
	}

	public function getRoute(){
		$url_actual='';
		foreach(Yii::app()->components['urlManager']->rules as $key => $value){
			if(strpos($value,'/')==false  || in_array($value,Yii::app()->components['urlManager']->indirect)){
				if(Yii::app()->getController()->getId()==$value){
					$url_actual=$key;
				}
			}
		}
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url==$url_actual){
					foreach($menu->roles as $roles){
						if($roles->role->action=='configimages'){
							return $menu->menu->id;
						}
					}

				}
			}
		}
	}
	
	function getApps(){
		$user = $this->loadUser(Yii::app()->user->id);	
		$perfiles=$user->perfiles;
		$apps=array();
		foreach($perfiles as $perfiles){
			foreach($perfiles->profile->apps as $app){
				$actions=array();
				foreach($app->roles as $roles){
					array_push($actions,$roles->role->action);
				}					
				$apps[]=array('url'=>$app->app->url,'id'=>$app->app->id,'roles'=>$actions,'title'=>$app->app->title,'action'=>$app->app->action,'description'=>$app->app->description,'filename'=>$app->app->filename,'ext'=>$app->app->ext,'id'=>$app->app->id);				
				if(self::widgetAccessChannelValidator($app->app->id,Yii::app()->user->getState('access_channel'))){
					$apps[]=array('url'=>$app->app->url,'title'=>$app->app->title,'description'=>$app->app->description,'action'=>$app->app->action,'id'=>$app->app->id,'filename'=>$app->app->filename,'ext'=>$app->app->ext,'id'=>$app->app->id);
				}
			}
		}
		return Utils::unique_multidim_array($apps,'id');
	}
	
	function getWidgets(){
		$user = $this->loadUser(Yii::app()->user->id);	
		$perfiles=$user->perfiles;
		$widgets=array();
		foreach($perfiles as $perfiles){
			foreach($perfiles->profile->widgets as $widget){
				$actions=array();
				foreach($widget->roles as $roles){
					array_push($actions,$roles->role->action);
				}					
				$widgets[]=array('url'=>$widget->widget->url,'id'=>$widget->widget->id,'size'=>$widget->widget->size,'roles'=>$actions);				
				if(self::widgetAccessChannelValidator($widget->widget->id,Yii::app()->user->getState('access_channel'))){
					$widgets[]=array('url'=>$widget->widget->url,'id'=>$widget->widget->id,'size'=>$widget->widget->size);
				}
			}
		}
		return Utils::unique_multidim_array($widgets,'id');
	}

	function getRules($model=null){
		$model = (is_null($model)?Yii::app()->getController()->getId():$model);
		if(!Yii::app()->user->isGuest) {
			$url_actual='';
			foreach(Yii::app()->components['urlManager']->rules as $key => $value){
				if(strpos($value,'/')==false || in_array($value,Yii::app()->components['urlManager']->indirect)){
					if($model==$value){
						$url_actual=$key;
					}
				}
			}
			if($url_actual!=''){
				$actions=array();
				foreach(Yii::app()->user->getRoles() as $perfiles){
					foreach($perfiles->profile->menues as $menu){
						if(self::menuAccessChannelValidator($menu->menu->id,Yii::app()->user->getState('access_channel'))){
							if($menu->menu->url==$url_actual){
								foreach($menu->roles as $roles){
									array_push($actions,$roles->role->action);
								}
							}
						}
					}
				}
				if(count($actions)>0){
					return $actions;
				}else{
					return array('*');
				}
			}else{
				return array('*');
			}
		}else{
			return array('*');
		}
	}

	function getMenu(){
		$menues_habilitados=array();
		foreach(Yii::app()->user->getRoles() as $perfiles){
			foreach($perfiles->profile->menues as $menu){
				if($menu->menu->url!='estadisticas'){
					if($menu->menu->id_menu==''){
						if(self::menuAccessChannelValidator($menu->id_menu,Yii::app()->user->getState('access_channel'))){
							$menues_habilitados[$menu->id_menu]['menu']=array('id'=>$menu->menu->id,'description'=>$menu->menu->description,'title'=>$menu->menu->title,'icono'=>$menu->menu->icono,'url'=>$menu->menu->url);
						}
					}else{
						if(self::menuAccessChannelValidator($menu->menu->id,Yii::app()->user->getState('access_channel'))){
							if($menu->menu->show_in_menu == 1){
								$url_actual='';
								foreach(Yii::app()->components['urlManager']->rules as $key => $value){
									if(strpos($value,'/')==false){
										if(Yii::app()->getController()->getId()==$value){
											$url_actual=$key;
										}

									}else{
										if(in_array($value,Yii::app()->components['urlManager']->indirect)){
											if(Yii::app()->getController()->getId().'/'.strtolower(Yii::app()->getController()->getAction()->getId())==strtolower($value)){
											$url_actual=$key;
											}
										}

									}
									if($menu->menu->url==$url_actual){
										$selected='active_menu';
									}else{
										$selected='';
									}
									$menues_habilitados[$menu->menu->id_menu]['submenu'][$menu->menu->id]=array('id'=>$menu->menu->id,'description'=>$menu->menu->description,'selected'=>$selected,'title'=>$menu->menu->title,'icono'=>$menu->menu->icono,'url'=>$menu->menu->url);
								}
							}
						}
					}
			}
		}
		}
		$items=array();
		if(count($menues_habilitados)>0){
			foreach($menues_habilitados as $hm){
				if(!isset($hm['submenu'])){
					if($hm['menu']['icono']!=''){
						$icon='<i class="fa '.$hm['menu']['icono'].'"></i>';
					}else{
						$icon='';
					}

					if($hm['menu']['url']!=''){ $link=Yii::app()->request->baseUrl.'/'.$hm['menu']['url']; } else{ $link=array('#'); }
					$items[]=array(
						'label'=>$icon.'<span>'.$hm['menu']['title'].'</span>',
						'itemOptions'=>array('class'=>'treeview'),
						'url'=>$link,
					);
				}else{
					$subitems=array();
					foreach($hm['submenu'] as $sm){
						if($sm['selected']!=''){
							$iico='fa-circle';
						}else{
							$iico='fa-circle-o';
						}
						$subitems[]=array(
							'label'=>'<i class="fa '.$iico.'"></i><span  >'.$sm['title'].'</span>',
							'itemOptions'=>array('class'=>'treeview '.$sm['selected'],' title'=>$sm['description'],'data-toggle'=>'tooltip'),
							'url'=>Yii::app()->request->baseUrl.'/'.$sm['url']
						);
					}
					if(isset($hm['menu'])){
						$items[]=array(
							'label'=>'<i class="fa '.$hm['menu']['icono'].'"></i><span>'.$hm['menu']['title'].'</span> <i class="fa fa-angle-left pull-right"></i>',
							'url'=>array('#'),
							'itemOptions'=>array('class'=>'treeview'),
							'items'=>$subitems
						);
					}
				}
			}
		}
		return $items;
	}
	// Load user model.
	protected function loadUser($id=null)
	{
		if($this->_model===null)
		{
			if($id!==null){
				 $this->_model=Users::model()->find("username='$id'");
			}
		}
		return $this->_model;
	}

	protected function widgetAccessChannelValidator($id_widget, $canal_actual)
	{
		$flag=false;
		$widgets = Widgetaccesschannelrelation::model()->findAll("id_widget=$id_widget");
		foreach ($widgets as $key => $val){
			if($val->id_accesschannel==$canal_actual){
				$flag=true;
			}
		}
		if(!$flag && !count($widgets)){/*
			$criteria = new CDbCriteria;
			$criteria->addCondition("keyword='office'");
			$canalDeAccesoOffice=AccessChannels::model()->find($criteria);
			if($canalDeAccesoOffice->id == $canal_actual){ */
				$flag=true;
		/*	} */
		}
		return $flag;
	}

	protected function menuAccessChannelValidator($id_menu, $canal_actual)
	{
		$flag=false;
		$menues = Menuaccesschannelrelation::model()->findAll("id_menu=$id_menu");
		foreach ($menues as $key => $val){
			if($val->id_accesschannel==$canal_actual){
				$flag=true;
			}
		}
		if(!$flag && !count($menues)){
			/* $criteria = new CDbCriteria;
			$criteria->addCondition("keyword='office'");
			$canalDeAccesoOffice=AccessChannels::model()->find($criteria);
			if($canalDeAccesoOffice->id == $canal_actual){ */
				$flag=true;
			/* } */
		}
		return $flag;
	}
}
