<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="max-w-2xl mx-auto mt-8 p-6 bg-white text-gray-900 border border-gray-300 rounded-lg shadow-lg">

    <h2 class="text-2xl font-bold text-gray-800 mb-4">Create a New Blog Post</h2>

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'post-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'space-y-6'),
    )); ?>

    <p class="text-gray-600 text-sm">Fields with <span class="text-red-500">*</span> are required.</p>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'p-4 mb-4 bg-red-100 text-red-700 rounded-lg border border-red-300')); ?>

    <!-- Title -->
    <div>
        <?php echo $form->labelEx($model, 'title', array('class' => 'block text-gray-700 font-semibold mb-1')); ?>
        <?php echo $form->textField($model, 'title', array('class' => 'mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2', 'maxlength' => 128, 'placeholder' => 'Enter the post title...')); ?>
        <?php echo $form->error($model, 'title', array('class' => 'text-red-500 text-sm')); ?>
    </div>

    <!-- Content -->
    <div>
        <?php echo $form->labelEx($model, 'content', array('class' => 'block text-gray-700 font-semibold mb-1')); ?>
        <?php echo $form->textArea($model, 'content', array('rows' => 8, 'class' => 'mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2', 'placeholder' => 'Write your blog post here...')); ?>
        <?php echo $form->error($model, 'content', array('class' => 'text-red-500 text-sm')); ?>
    </div>

    <!-- Tags -->
    <div>
        <?php echo $form->labelEx($model, 'tags', array('class' => 'block text-gray-700 font-semibold mb-1')); ?>
        <?php echo $form->textArea($model, 'tags', array('rows' => 2, 'class' => 'mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2', 'placeholder' => 'Enter tags separated by commas...')); ?>
        <?php echo $form->error($model, 'tags', array('class' => 'text-red-500 text-sm')); ?>
    </div>

    <!-- Status -->
    <div>
        <?php echo $form->labelEx($model, 'status', array('class' => 'block text-gray-700 font-semibold mb-1')); ?>
        <?php echo $form->dropDownList($model, 'status', Lookup::items('PostStatus'), array('class' => 'mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2')); ?>
        <?php echo $form->error($model, 'status', array('class' => 'text-red-500 text-sm')); ?>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Save Post' : 'Update Post', array('class' => 'bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-200')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
