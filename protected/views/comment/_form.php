<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="max-w-3xl mx-auto p-6 bg-white border border-gray-300 rounded-lg shadow-lg">
    
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Leave a Comment</h2>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        'enableAjaxValidation'=>true,
        'htmlOptions' => ['class' => 'space-y-5'],
    )); ?>

    <p class="text-gray-700 text-sm">Fields with <span class="text-red-500">*</span> are required.</p>

    <?php echo $form->errorSummary($model, '', '', ['class' => 'p-4 bg-red-100 text-red-800 rounded-md border border-red-300']); ?>

    <!-- Comment Content -->
    <div>
        <?php echo $form->labelEx($model,'content', ['class' => 'block text-gray-700 font-semibold mb-1']); ?>
        <?php echo $form->textArea($model,'content',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500', 'rows'=>6, 'placeholder'=>'Write your comment here...']); ?>
        <?php echo $form->error($model,'content', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Author Name -->
    <div>
        <?php echo $form->labelEx($model,'author', ['class' => 'block text-gray-700 font-semibold mb-1']); ?>
        <?php echo $form->textField($model,'author',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500', 'maxlength'=>128, 'placeholder'=>'Your name']); ?>
        <?php echo $form->error($model,'author', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Email -->
    <div>
        <?php echo $form->labelEx($model,'email', ['class' => 'block text-gray-700 font-semibold mb-1']); ?>
        <?php echo $form->textField($model,'email',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500', 'maxlength'=>128, 'placeholder'=>'Your email address']); ?>
        <?php echo $form->error($model,'email', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Website URL -->
    <div>
        <?php echo $form->labelEx($model,'url', ['class' => 'block text-gray-700 font-semibold mb-1']); ?>
        <?php echo $form->textField($model,'url',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500', 'maxlength'=>128, 'placeholder'=>'Your website (optional)']); ?>
        <?php echo $form->error($model,'url', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Submit Button -->
    <div class="text-right">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Post Comment' : 'Save', [
            'class' => 'px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-200 shadow-md'
        ]); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
