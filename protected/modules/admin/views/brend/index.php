<?php
/* @var $this BrendController */
/* @var $model Brend */

$this->breadcrumbs=array(
	'Brends'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Список марок', 'url'=>array('index')),
	array('label'=>'Создать марку', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#brend-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'brend-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'image',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
