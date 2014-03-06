<?php
/* @var $this ModelsController */
/* @var $model Models */

$this->breadcrumbs=array(
	'Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Список Моделей', 'url'=>array('index')),
);
?>

<h1>Создать Модель</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>