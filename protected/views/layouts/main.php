<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Include Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#101828',
                        secondary: '#F4F2ED'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        };
    </script>
</head>


<body class="bg-primary text-textPrimary font-sans">

<!-- Navbar -->
<nav class="bg-[#161b22] text-white shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Left: Logo & Menu -->
        <div class="flex items-center space-x-4">
            <!-- Logo -->
            <div class="text-xl font-bold flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                    <path d="M2 12l10 5 10-5"></path>
                </svg>
                <span><?php echo CHtml::encode(Yii::app()->name); ?></span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6">
                <?php 
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array(
                            'label' => '<span class="material-icons align-middle">home</span> Home',
                            'url' => array('/site/index')
                        ),
                        array(
                            'label' => '<span class="material-icons align-middle">article</span> Post',
                            'url' => array('/post/index')
                        ),
                        array(
                            'label' => '<span class="material-icons align-middle">info</span> About',
                            'url' => array('/site/page', 'view' => 'about')
                        ),
                        array(
                            'label' => '<span class="material-icons align-middle">email</span> Contact',
                            'url' => array('/site/contact')
                        ),
                        array(
                            'label' => '<span class="material-icons align-middle">login</span> Login',
                            'url' => array('/site/login'),
                            'visible' => Yii::app()->user->isGuest
                        ),
                        array(
                            'label' => '<span class="material-icons align-middle">logout</span> Logout (' . Yii::app()->user->name . ')',
                            'url' => array('/site/logout'),
                            'visible' => !Yii::app()->user->isGuest
                        )
                    ),
                    'encodeLabel' => false, // Allows icons to be displayed properly
                    'htmlOptions' => array('class' => 'flex space-x-4 items-center'),
                    'itemCssClass' => 'hover:text-gray-300 transition duration-300 flex items-center space-x-2',
                )); 
                ?>
            </div>
        </div>

        <!-- Right: Search Bar & User Profile -->
        <div class="flex items-center space-x-4">
            <!-- Search Bar -->
            <div class="relative hidden md:block">
                <input type="text" placeholder="Search..." class="bg-gray-800 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring focus:ring-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-3 top-2.5 w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>

            <!-- User Profile (Dropdown) -->
            <?php if (!Yii::app()->user->isGuest): ?>
                <div class="relative">
                    <button class="flex items-center space-x-2 focus:outline-none">
                        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode(Yii::app()->user->name); ?>&background=333&color=fff&size=40" class="w-8 h-8 rounded-full">
                        <span class="hidden md:inline"><?php echo Yii::app()->user->name; ?></span>
                    </button>
                </div>
            <?php endif; ?>

            <!-- Mobile Menu Button -->
            <button class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
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
        <div class="bg-accent text-black p-6 rounded-lg shadow-md">
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
