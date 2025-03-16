<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array('Login');
?>

<div class="bg-white shadow-md rounded-lg border border-gray-300 max-w-md mx-auto mt-10 p-6">
    <h1 class="text-xl font-bold text-gray-800 text-center">Login</h1>

    <p class="text-gray-600 text-sm text-center mt-2">Enter your credentials to access your account.</p>

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

    <div class="mt-4">
        <label class="block font-medium text-gray-700">
            <?php echo $form->labelEx($model, 'username'); ?>
        </label>
        <?php echo $form->textField($model, 'username', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300')); ?>
        <small class="text-red-500"><?php echo $form->error($model, 'username'); ?></small>
    </div>

    <div class="mt-4">
        <label class="block font-medium text-gray-700">
            <?php echo $form->labelEx($model, 'password'); ?>
        </label>
        <?php echo $form->passwordField($model, 'password', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300')); ?>
        <small class="text-red-500"><?php echo $form->error($model, 'password'); ?></small>
    </div>

    <div class="mt-4 flex items-center">
        <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'mr-2')); ?>
        <label class="text-gray-700 text-sm">
            <?php echo $form->label($model, 'rememberMe'); ?>
        </label>
        <small class="text-red-500"><?php echo $form->error($model, 'rememberMe'); ?></small>
    </div>

    <div class="mt-6">
        <?php echo CHtml::submitButton('Login', array('class' => 'w-full bg-black hover:bg-gray-800 text-white font-bold py-2 rounded-lg transition')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
