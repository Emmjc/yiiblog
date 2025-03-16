<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a1a1a',  // Deep black
                        secondary: '#333',   // Slightly lighter black
                        accent: '#f4f4f4',   // Soft white
                        textPrimary: '#f9f9f9', // Light text
                        textSecondary: '#cbd5e1', // Soft gray
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-primary text-textPrimary font-sans">

    <!-- Navbar -->
    <nav class="bg-secondary text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-xl font-bold">
                <?php echo CHtml::encode(Yii::app()->name); ?>
            </div>
            
            <!-- Menu -->
            <div class="hidden md:flex space-x-6">
                <?php $this->widget('zii.widgets.CMenu', array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'Post', 'url'=>array('/post/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array('class' => 'flex space-x-4'),
                    'itemCssClass' => 'hover:text-gray-300',
                )); ?>
            </div>
        </div>
    </nav>

    <!-- Page Container -->
    <div class="container mx-auto px-4 py-6">

        <!-- Breadcrumbs -->
        <?php if(isset($this->breadcrumbs)): ?>
            <nav class="text-gray-400 text-sm mb-4">
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                    'htmlOptions' => array('class' => 'flex space-x-2'),
                    'separator' => '<span class="text-gray-600">/</span>',
                )); ?>
            </nav>
        <?php endif; ?>

        <!-- Main Content -->
        <div class="bg-accent text-secondary p-6 rounded-lg shadow-md">
            <?php echo $content; ?>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-secondary text-textSecondary text-center p-4 mt-6">
        <p>&copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.</p>
        <p class="text-xs"><?php echo Yii::powered(); ?></p>
    </footer>

</body>
</html>
