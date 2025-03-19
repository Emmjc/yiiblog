<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<!-- Hero Section -->
<div class="relative bg-[#101828] text-white py-20">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-8">
            
            <!-- Feature Image (Left Side) -->
            <div class="lg:w-1/2 w-full">
                <img src="../assets/blog-preview.png" alt="Blog Preview" 
                     class="w-full max-w-lg mx-auto lg:mx-0 lg:ml-auto object-contain">
            </div>

            <!-- Content (Right Side) -->
            <div class="lg:w-1/2 w-full text-center lg:text-left">
                <h1 class="text-3xl md:text-5xl font-extrabold">
                    Welcome to <?php echo CHtml::encode(Yii::app()->name); ?>
                </h1>
                <p class="mt-4 text-lg md:text-xl text-gray-400">
                    Explore our latest blog posts and stay updated with insightful content.
                </p>

                <!-- Call-to-Action Buttons -->
                <div class="flex flex-wrap lg:justify-start justify-center gap-4 pt-8">
                    <?php echo CHtml::link(
                        '<span class="inline-flex items-center gap-2 font-semibold">See Posts</span>',
                        array('/post/index'),
                        array(
                            'class' => 'inline-flex items-center gap-2 px-6 py-4 rounded-full text-white bg-[#101828] border border-[#F4F2ED] 
                                        hover:bg-[#F4F2ED] hover:text-[#101828] hover:border-[#101828] transition'
                        )
                    ); ?>

                    <?php echo CHtml::link(
                        '<span class="inline-flex items-center gap-2 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"/>
                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                            Login
                        </span>',
                        array('/site/login'),
                        array(
                            'class' => 'inline-flex items-center gap-2 px-6 py-4 rounded-full text-[#101828] bg-[#F4F2ED] border border-[#101828] 
                                        hover:bg-[#101828] hover:text-[#F4F2ED] hover:border-[#F4F2ED] transition'
                        )
                    ); ?>
                </div>
            </div>

        </div>
    </div>
</div>
