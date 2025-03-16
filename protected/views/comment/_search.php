<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="bg-white shadow-md rounded-lg p-6 border border-gray-300">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <?php echo $form->label($model,'content', array('class' => 'block text-gray-700 font-medium')); ?>
            <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'class'=>'w-full border p-2 rounded')); ?>
        </div>
        
        <div>
            <?php echo $form->label($model,'create_time', array('class' => 'block text-gray-700 font-medium')); ?>
            <?php echo $form->textField($model,'create_time',array('class'=>'w-full border p-2 rounded', 'placeholder' => 'YYYY-MM-DD')); ?>
        </div>
        
        <div>
            <?php echo $form->label($model,'author', array('class' => 'block text-gray-700 font-medium')); ?>
            <?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128, 'class'=>'w-full border p-2 rounded', 'placeholder' => 'Author Name')); ?>
        </div>
        
        <div>
            <?php echo $form->label($model,'email', array('class' => 'block text-gray-700 font-medium')); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128, 'class'=>'w-full border p-2 rounded', 'placeholder' => 'Email Address')); ?>
        </div>
        
        <div>
            <?php echo $form->label($model,'url', array('class' => 'block text-gray-700 font-medium')); ?>
            <?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128, 'class'=>'w-full border p-2 rounded', 'placeholder' => 'Website URL')); ?>
        </div>
        
        <div>
            <?php echo $form->label($model,'post_id', array('class' => 'block text-gray-700 font-medium')); ?>
            <?php echo $form->textField($model,'post_id',array('class'=>'w-full border p-2 rounded', 'placeholder' => 'Post ID')); ?>
        </div>
    </div>

    <div class="mt-4">
        <?php echo CHtml::submitButton('Search', array('class' => 'bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
