<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="max-w-2xl mx-auto mt-8 p-6 bg-secondary text-primary border border-gray-300 rounded-lg shadow-lg">

    <h2 class="text-2xl font-bold text-primary mb-4">
        <?php echo $model->isNewRecord ? 'Leave a Comment' : 'Update Comment'; ?>
    </h2>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'comment-form',
        'enableAjaxValidation'=>true,
        'htmlOptions' => ['class' => 'space-y-6'],
    )); ?>

    <p class="text-gray-700 text-sm">Fields with <span class="text-red-500">*</span> are required.</p>

    <?php echo $form->errorSummary($model, '', '', ['class' => 'p-4 bg-red-100 text-red-800 rounded-md border border-red-300']); ?>

    <?php if (!Yii::app()->user->isGuest): ?>
    <!-- Status -->
    <div>
        <?php echo $form->labelEx($model, 'status', ['class' => 'block text-primary font-semibold mb-1']); ?>
        <?php echo $form->dropDownList($model, 'status', Lookup::items('CommentStatus'), [
            'class' => 'mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-primary focus:border-primary p-2'
        ]); ?>
        <?php echo $form->error($model, 'status', ['class' => 'text-red-500 text-sm']); ?>
    </div>
    <?php endif; ?>

    <!-- Comment Content -->
    <div>
        <?php echo $form->labelEx($model,'content', ['class' => 'block text-primary font-semibold mb-1']); ?>
        <?php echo $form->textArea($model,'content',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary', 'rows'=>6, 'placeholder'=>'Write your comment here...']); ?>
        <?php echo $form->error($model,'content', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Author Name -->
    <div>
        <?php echo $form->labelEx($model,'author', ['class' => 'block text-primary font-semibold mb-1']); ?>
        <?php echo $form->textField($model,'author',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary', 'maxlength'=>128, 'placeholder'=>'Your name']); ?>
        <?php echo $form->error($model,'author', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Email -->
    <div>
        <?php echo $form->labelEx($model,'email', ['class' => 'block text-primary font-semibold mb-1']); ?>
        <?php echo $form->textField($model,'email',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary', 'maxlength'=>128, 'placeholder'=>'Your email address']); ?>
        <?php echo $form->error($model,'email', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Website URL -->
    <div>
        <?php echo $form->labelEx($model,'url', ['class' => 'block text-primary font-semibold mb-1']); ?>
        <?php echo $form->textField($model,'url',['class'=>'w-full p-3 border border-gray-300 rounded-md focus:ring-primary focus:border-primary', 'maxlength'=>128, 'placeholder'=>'Your website (optional)']); ?>
        <?php echo $form->error($model,'url', ['class' => 'text-red-500 text-sm']); ?>
    </div>

    <!-- Submit & Cancel Buttons -->
    <div class="flex justify-end gap-4">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Post Comment' : 'Save', [
            'class' => 'bg-primary hover:bg-opacity-80 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-200'
        ]); ?>

        <?php if (!Yii::app()->user->isGuest): ?>
            <?php echo CHtml::link('Cancel', array('comment/view', 'id' => $model->id), [
                'class' => 'bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-200'
            ]); ?>
        <?php endif; ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
