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

    <?php if (!Yii::app()->user->isGuest): ?> <!-- Only show if user is logged in -->
    <!-- Status -->
    <div>
        <?php echo $form->labelEx($model, 'status', array('class' => 'block text-gray-700 font-semibold mb-1')); ?>
        <?php echo $form->dropDownList($model, 'status', Lookup::items('CommentStatus'), array(
            'class' => 'mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2'
        )); ?>
        <?php echo $form->error($model, 'status', array('class' => 'text-red-500 text-sm')); ?>
    </div>
    <?php endif; ?>

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

    <!-- Submit & Cancel Buttons -->
    <div class="flex justify-end space-x-3">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Post Comment' : 'Save', [
            'class' => 'px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition duration-200 shadow-md'
        ]); ?>

        <?php echo CHtml::link('Cancel', array('comment/view' , 'id' => $model->id), [
            'class' => 'px-5 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition duration-200 shadow-md'
        ]); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
