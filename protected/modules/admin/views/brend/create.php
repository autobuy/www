<?php
/* @var $this BrendController */
/* @var $model Brend */

$this->breadcrumbs=array(
	'Brends'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список Брендов', 'url'=>array('index')),
	array('label'=>'Manage Brend', 'url'=>array('admin')),
);
?>

<h1>Create Brend</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>