<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array('Login');
?>

<!-- Background Layer -->
<div class="relative bg-[#F4F2ED] py-16">
    <div class="absolute inset-0 bg-[#101828] skew-y-3"></div>

    <div class="relative container mx-auto px-4 lg:px-8 xl:max-w-3xl">
        <!-- Heading Section -->
        <div class="text-center">
            <h1 class="text-3xl font-extrabold text-white">Welcome Back</h1>
            <p class="text-gray-300 mt-2 text-lg">Access your account securely</p>
        </div>

        <!-- Login Form -->
        <div class="mt-10 bg-white p-8 rounded-3xl shadow-lg border border-gray-200">
            <?php $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            )); ?>

            <!-- Username Field -->
            <div class="mt-6">
                <label class="block font-semibold text-gray-800">
                    <?php echo $form->labelEx($model, 'username'); ?>
                </label>
                <div class="flex items-center bg-gray-100 rounded-lg px-4 py-2">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 14v1a4 4 0 01-8 0v-1m8-4a4 4 0 10-8 0m8 0a4 4 0 00-8 0m8 0v1a4 4 0 01-8 0v-1">
                        </path>
                    </svg>
                    <?php echo $form->textField($model, 'username', array(
                        'class' => 'w-full bg-transparent focus:outline-none px-3',
                        'placeholder' => 'Enter your username'
                    )); ?>
                </div>
                <small class="text-red-500"><?php echo $form->error($model, 'username'); ?></small>
            </div>

            <!-- Password Field -->
            <div class="mt-6">
                <label class="block font-semibold text-gray-800">
                    <?php echo $form->labelEx($model, 'password'); ?>
                </label>
                <div class="flex items-center bg-gray-100 rounded-lg px-4 py-2">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c1.656 0 3 1.344 3 3s-1.344 3-3 3-3-1.344-3-3 1.344-3 3-3zm0-5c-5.523 0-10 4.477-10 10h4a6 6 0 0112 0h4c0-5.523-4.477-10-10-10z">
                        </path>
                    </svg>
                    <?php echo $form->passwordField($model, 'password', array(
                        'class' => 'w-full bg-transparent focus:outline-none px-3',
                        'placeholder' => 'Enter your password'
                    )); ?>
                </div>
                <small class="text-red-500"><?php echo $form->error($model, 'password'); ?></small>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="mt-6 flex items-center">
                <?php echo $form->checkBox($model, 'rememberMe', array('class' => 'mr-2')); ?>
                <label class="text-gray-700 text-sm">
                    <?php echo $form->label($model, 'rememberMe'); ?>
                </label>
                <small class="text-red-500 ml-2"><?php echo $form->error($model, 'rememberMe'); ?></small>
            </div>

            <!-- Submit Button -->
            <div class="mt-8">
                <?php echo CHtml::submitButton('Login', array(
                    'class' => 'w-full bg-[#101828] hover:bg-gray-900 text-white font-bold py-2 rounded-lg transition'
                )); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
