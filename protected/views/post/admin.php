<?php
$this->breadcrumbs = array(
    'Manage Posts',
);
?>

<h1 class="text-2xl font-bold text-primary my-4">Manage Posts</h1>

<div class="bg-white shadow-md rounded-lg p-6 border border-gray-300">
    <?php 
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $model->search(),
        'filter' => $model,
        'itemsCssClass' => 'table-auto w-full border-collapse border border-gray-300 divide-y divide-gray-200',
        'rowCssClassExpression' => '$row % 2 ? "bg-secondary" : "bg-white"', // Zebra striping effect
        'columns' => array(
            array(
                'name' => 'title',
                'type' => 'raw',
                'value' => 'CHtml::link(CHtml::encode($data->title), $data->url, array("class" => "text-primary font-semibold hover:underline"))',
                'headerHtmlOptions' => array('class' => 'p-2 bg-secondary border'),
                'htmlOptions' => array('class' => 'p-2 border'),
                'filter' => CHtml::textField('Post[title]', $model->title, array('class' => 'border p-1 rounded', 'placeholder' => 'Search Title...')),
            ),
            array(
                'name' => 'status',
                'type' => 'raw',
                'value' => 'CHtml::tag("span", array("class" => $data->status == 1 ? "bg-yellow-500 text-white px-2 py-1 rounded" : ($data->status == 2 ? "bg-green-600 text-white px-2 py-1 rounded" : "bg-red-500 text-white px-2 py-1 rounded")), Lookup::item("PostStatus", $data->status))',
                'filter' => CHtml::dropDownList('Post[status]', $model->status, array("" => "All", "1" => "Draft", "2" => "Published", "3" => "Archived"), array('class' => 'border p-1 rounded')),
                'htmlOptions' => array('class' => 'p-2 text-center border'),
                'headerHtmlOptions' => array('class' => 'p-2 bg-secondary border'),
            ),
            array(
                'name' => 'create_time',
                'type' => 'datetime',
                'filter' => false,
                'htmlOptions' => array('class' => 'p-2 text-primary border'),
                'headerHtmlOptions' => array('class' => 'p-2 bg-secondary border'),
            ),
            array(
                'class' => 'CButtonColumn',
                'header' => 'Actions',
                'headerHtmlOptions' => array('class' => 'p-2 bg-secondary border'),
                'htmlOptions' => array('class' => 'p-2 border flex items-center space-x-2 whitespace-nowrap'),
                'template' => '{view} {update} {delete}',
                'buttons' => array(
                    'view' => array(
                        'label' => '👁️ View',
                        'imageUrl' => false,
                        'options' => array('class' => 'text-primary hover:underline text-sm'),
                    ),
                    'update' => array(
                        'label' => '✏️ Edit',
                        'imageUrl' => false,
                        'options' => array('class' => 'text-green-600 hover:underline text-sm'),
                    ),
                    'delete' => array(
                        'label' => '🗑️ Delete',
                        'imageUrl' => false,
                        'url' => 'Yii::app()->createUrl("post/delete", array("id"=>$data->id))',
                        'options' => array(
                            'class' => 'text-red-600 hover:underline text-sm',
                            'onclick' => 'event.preventDefault(); 
                                if(confirm("Are you sure you want to delete this post?")) { 
                                    var form = document.createElement("form");
                                    form.method = "POST";
                                    form.action = this.href;
                                    document.body.appendChild(form);
                                    form.submit();
                                }'
                        ),
                    ),
                ),
            ),            
        ),
    )); 
    ?>
</div>
