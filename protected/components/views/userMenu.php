<ul class="bg-secondary shadow-md rounded-lg border border-primary p-4 space-y-2">
    <li>
        <?php echo CHtml::link('➕ Create New Post', array('post/create'), array('class' => 'block text-primary font-semibold hover:text-gray-500')); ?>
    </li>
    <li>
        <?php echo CHtml::link('📋 Manage Posts', array('post/admin'), array('class' => 'block text-primary hover:text-gray-500')); ?>
    </li>
    <li>
        <?php echo CHtml::link('💬 Manage Comments', array('comment/admin'), array('class' => 'block text-primary hover:text-gray-500')); ?>
    </li>
    <li class="flex items-center justify-between">
        <?php echo CHtml::link('⏳ Pending Comments', array('comment/index'), array('class' => 'text-primary hover:text-gray-500 font-medium flex items-center')); ?>
        <span class="text-white bg-red-600 px-2 py-1 rounded-full text-sm">
            <?php echo Comment::model()->pendingCommentCount; ?>
        </span>
    </li>
    <li>
        <?php echo CHtml::link('🚪 Logout', array('site/logout'), array('class' => 'block text-primary font-semibold hover:text-gray-500')); ?>
    </li>
</ul>
