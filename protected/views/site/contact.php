<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array('Contact');
?>

<!-- Contact Us Section -->
<div class="relative bg-white">
    <div class="absolute inset-0 skew-y-1 bg-primary"></div>
    <div class="relative container mx-auto space-y-8 px-4 py-16 lg:px-8 xl:max-w-4xl">

        <!-- Heading -->
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-white md:text-4xl">Contact Us</h2>
            <p class="text-lg text-white/75 mt-2">
                Have business inquiries or questions? Fill out the form below, and we’ll get back to you soon!
            </p>
        </div>
        <!-- END Heading -->

        <div class="bg-white shadow-lg rounded-lg border border-gray-300 p-6">
            <?php if (Yii::app()->user->hasFlash('contact')): ?>
                <div class="bg-green-100 text-green-700 p-3 rounded-lg text-center">
                    <?php echo Yii::app()->user->getFlash('contact'); ?>
                </div>
            <?php else: ?>

                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'contact-form',
                    'enableClientValidation' => true,
                    'clientOptions' => array('validateOnSubmit' => true),
                )); ?>

                <!-- Name Field -->
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">
                        <?php echo $form->labelEx($model, 'name'); ?>
                    </label>
                    <?php echo $form->textField($model, 'name', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300', 'placeholder' => 'Enter your full name')); ?>
                    <small class="text-red-500"><?php echo $form->error($model, 'name'); ?></small>
                </div>

                <!-- Email Field -->
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">
                        <?php echo $form->labelEx($model, 'email'); ?>
                    </label>
                    <?php echo $form->textField($model, 'email', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300', 'placeholder' => 'e.g., yourname@example.com')); ?>
                    <small class="text-red-500"><?php echo $form->error($model, 'email'); ?></small>
                </div>

                <!-- Subject Field -->
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">
                        <?php echo $form->labelEx($model, 'subject'); ?>
                    </label>
                    <?php echo $form->textField($model, 'subject', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300', 'placeholder' => 'Briefly describe your inquiry')); ?>
                    <small class="text-red-500"><?php echo $form->error($model, 'subject'); ?></small>
                </div>

                <!-- Message Field -->
                <div class="mt-4">
                    <label class="block font-medium text-gray-700">
                        <?php echo $form->labelEx($model, 'body'); ?>
                    </label>
                    <?php echo $form->textArea($model, 'body', array('class' => 'w-full px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300', 'rows' => 5, 'placeholder' => 'Provide detailed information about your concern...')); ?>
                    <small class="text-red-500"><?php echo $form->error($model, 'body'); ?></small>
                </div>

                <!-- CAPTCHA -->
                <?php if (CCaptcha::checkRequirements()): ?>
                    <div class="mt-4">
                        <label class="block font-medium text-gray-700">
                            <?php echo $form->labelEx($model, 'verifyCode'); ?>
                        </label>
                        <div class="flex items-center space-x-4">
                            <?php $this->widget('CCaptcha'); ?>
                            <?php echo $form->textField($model, 'verifyCode', array('class' => 'px-4 py-2 border rounded-lg focus:ring focus:ring-gray-300', 'placeholder' => 'Enter the code shown')); ?>
                        </div>
                        <small class="text-gray-500 text-sm">
                            Enter the letters shown above. Letters are not case-sensitive.
                        </small>
                        <small class="text-red-500"><?php echo $form->error($model, 'verifyCode'); ?></small>
                    </div>
                <?php endif; ?>

                <!-- Submit Button -->
                <div class="mt-6">
                    <?php echo CHtml::button('Submit', array(
                        'class' => 'w-full bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 rounded-lg transition',
                        'onclick' => 'return false;' // Prevents the button from submitting the form
                    )); ?>
                </div>

                <?php $this->endWidget(); ?>
                <?php endif; ?>
        </div>

    </div>
</div>
<!-- END Contact Us Section -->
