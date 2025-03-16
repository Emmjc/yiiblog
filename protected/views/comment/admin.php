<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
    'Comments'=>array('index'),
    'Manage',
);

$this->menu=array(
    array('label'=>'List Comment', 'url'=>array('index')),
    array('label'=>'Create Comment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $('#comment-grid').yiiGridView('update', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1 class="text-2xl font-bold text-gray-800 my-4">Manage Comments</h1>

<p class="text-sm text-gray-600 bg-gray-100 p-2 rounded-md border border-gray-300">
    You may optionally enter a comparison operator 
    <span class="font-bold text-gray-800">&lt;</span>, 
    <span class="font-bold text-gray-800">&lt;=</span>, 
    <span class="font-bold text-gray-800">&gt;</span>, 
    <span class="font-bold text-gray-800">&gt;=</span>, 
    <span class="font-bold text-gray-800">&lt;&gt;</span>, or 
    <span class="font-bold text-gray-800">=</span> 
    at the beginning of each search value to specify how the comparison should be done.
</p>


<?php echo CHtml::button('🔍 Advanced Search', array(
    'class' => 'search-button bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition mt-2',
)); ?>
<div class="search-form bg-gray-100 p-4 rounded-md mt-4 shadow-md hidden">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div>


<div class="bg-white shadow-md rounded-lg p-6 border border-gray-300">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'comment-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'itemsCssClass' => 'table-auto w-full border-collapse border border-gray-300 divide-y divide-gray-200',
        'rowCssClassExpression' => '$row % 2 ? "bg-gray-50" : "bg-white"',
        'columns'=>array(
            array(
                'name' => 'id',
                'header' => 'ID',
                'headerHtmlOptions' => array('class' => 'p-2 bg-gray-200 border'),
                'htmlOptions' => array('class' => 'p-2 border text-center'),
            ),
            array(
                'name' => 'content',
                'type' => 'raw',
                'value' => 'CHtml::encode($data->content)',
                'headerHtmlOptions' => array('class' => 'p-2 bg-gray-200 border'),
                'htmlOptions' => array('class' => 'p-2 border'),
                'filter' => CHtml::textField('Comment[content]', $model->content, array('class' => 'border p-1 rounded', 'placeholder' => 'Search Content...')),
            ),
            array(
                'name' => 'status',
                'type' => 'raw',
                'value' => 'CHtml::tag("span", array("class" => $data->status == 1 ? "bg-yellow-500 text-white px-2 py-1 rounded" : ($data->status == 2 ? "bg-green-500 text-white px-2 py-1 rounded" : "bg-red-500 text-white px-2 py-1 rounded")), Lookup::item("CommentStatus", $data->status))',
                'headerHtmlOptions' => array('class' => 'p-2 bg-gray-200 border'),
                'htmlOptions' => array('class' => 'p-2 text-center border'),
            ),
            array(
                'name' => 'author',
                'header' => 'Author',
                'headerHtmlOptions' => array('class' => 'p-2 bg-gray-200 border'),
                'htmlOptions' => array('class' => 'p-2 border'),
                'filter' => CHtml::textField('Comment[author]', $model->author, array('class' => 'border p-1 rounded', 'placeholder' => 'Search Author...')),
            ),
            array(
                'class' => 'CButtonColumn',
                'header' => 'Actions',
                'headerHtmlOptions' => array('class' => 'p-2 bg-gray-200 border'),
                'htmlOptions' => array('class' => 'p-2 border flex items-center space-x-2 whitespace-nowrap'),
                'template' => '{view} {update} {delete}',
                'buttons' => array(
                    'view' => array(
                        'label' => '👁️ View',
                        'imageUrl' => false,
                        'options' => array('class' => 'text-blue-600 hover:underline text-sm'),
                    ),
                    'update' => array(
                        'label' => '✏️ Edit',
                        'imageUrl' => false,
                        'options' => array('class' => 'text-green-600 hover:underline text-sm'),
                    ),
                    'delete' => array(
                        'label' => '🗑️ Delete',
                        'imageUrl' => false,
                        'options' => array('class' => 'text-red-600 hover:underline text-sm'),
                    ),
                ),
            ),
        ),
    )); ?>
</div>
