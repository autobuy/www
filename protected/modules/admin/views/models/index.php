<?php
/* @var $this ModelsController */
/* @var $model Models */

$this->breadcrumbs=array(
	'Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Models', 'url'=>array('index')),
	array('label'=>'Create Models', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#models-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Список Моделей</h1>


<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'models-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
                'brend_id'=>array(
                    'name'=>'brend_id',
                    'value'=>'($data->brend->title)',
                    'filter'=>  Brend::all()
                    ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
