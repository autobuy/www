<?php
/* @var $this BrendController */
/* @var $model Brend */

$this->breadcrumbs=array(
	'Brends'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brend', 'url'=>array('index')),
	array('label'=>'Create Brend', 'url'=>array('create')),
	array('label'=>'View Brend', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Brend', 'url'=>array('admin')),
);
?>

<h1>Update Brend <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>