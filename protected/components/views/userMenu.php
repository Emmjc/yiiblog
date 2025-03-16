<ul class="bg-white shadow-md rounded-lg border border-gray-300 p-4 space-y-2">
    <li>
        <?php echo CHtml::link('➕ Create New Post', array('post/create'), array('class' => 'block text-black font-semibold hover:text-gray-700')); ?>
    </li>
    <li>
        <?php echo CHtml::link('📋 Manage Posts', array('post/admin'), array('class' => 'block text-black hover:text-gray-700')); ?>
    </li>
    <li>
        <?php echo CHtml::link('💬 Manage Comments', array('comment/admin'), array('class' => 'block text-black hover:text-gray-700')); ?>
    </li>
    <li>
        <?php echo CHtml::link('✅ Approve Comments', array('comment/index'), array('class' => 'block text-black hover:text-gray-700')) . 
            ' <span class="text-white bg-red-600 px-2 py-1 rounded-full text-sm">' . Comment::model()->pendingCommentCount . '</span>'; ?>
    </li>
    <li>
        <?php echo CHtml::link('🚪 Logout', array('site/logout'), array('class' => 'block text-black font-semibold hover:text-gray-700')); ?>
    </li>
</ul>
