<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array('Contact');
?>

<div class="bg-white shadow-md rounded-lg border border-gray-300 max-w-lg mx-auto mt-10 p-6">
    <h1 class="text-xl font-bold text-gray-800 text-center">Contact Us</h1>

    <?php if (Yii::app()->user->hasFlash('contact')): ?>
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mt-4 text-center">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
        </div>
    <?php else: ?>

        <p class="text-gray-600 text-sm text-center mt-2">
            Have business inquiries or questions? Fill out the form below to reach us. We'll get back to you soon!
        </p>

        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        )); ?>

        <div class="mt-4">
            <label class="block font-medium text-gray-700">
                <?php echo $form->labelEx($model, 'name'); ?>
            </label>
            <?php echo $form->textField($model, 'name', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300')); ?>
            <small class="text-red-500"><?php echo $form->error($model, 'name'); ?></small>
        </div>

        <div class="mt-4">
            <label class="block font-medium text-gray-700">
                <?php echo $form->labelEx($model, 'email'); ?>
            </label>
            <?php echo $form->textField($model, 'email', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300')); ?>
            <small class="text-red-500"><?php echo $form->error($model, 'email'); ?></small>
        </div>

        <div class="mt-4">
            <label class="block font-medium text-gray-700">
                <?php echo $form->labelEx($model, 'subject'); ?>
            </label>
            <?php echo $form->textField($model, 'subject', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300')); ?>
            <small class="text-red-500"><?php echo $form->error($model, 'subject'); ?></small>
        </div>

        <div class="mt-4">
            <label class="block font-medium text-gray-700">
                <?php echo $form->labelEx($model, 'body'); ?>
            </label>
            <?php echo $form->textArea($model, 'body', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300', 'rows' => 5)); ?>
            <small class="text-red-500"><?php echo $form->error($model, 'body'); ?></small>
        </div>

        <?php if (CCaptcha::checkRequirements()): ?>
        <div class="mt-4">
            <label class="block font-medium text-gray-700">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>
            </label>
            <div class="flex items-center space-x-4">
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model, 'verifyCode', array('class' => 'px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300')); ?>
            </div>
            <small class="text-gray-500 text-sm">
                Enter the letters shown above. Letters are not case-sensitive.
            </small>
            <small class="text-red-500"><?php echo $form->error($model, 'verifyCode'); ?></small>
        </div>
        <?php endif; ?>

        <div class="mt-6">
            <?php echo CHtml::submitButton('Submit', array('class' => 'w-full bg-black hover:bg-gray-800 text-white font-bold py-2 rounded-lg transition')); ?>
        </div>

        <?php $this->endWidget(); ?>
    <?php endif; ?>
</div>
