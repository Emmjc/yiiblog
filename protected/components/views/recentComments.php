<ul class="bg-white shadow-md rounded-lg border border-gray-300 p-4">
    <?php foreach($this->getRecentComments() as $comment): ?>
        <li class="border-b last:border-none py-3 text-gray-700">
            <span class="font-semibold">
                <?php echo CHtml::link(CHtml::encode($comment->author), array('post/view', 'id' => $comment->post->id), array('class' => 'text-black hover:underline')); ?>
            </span>
            <span class="text-gray-500"> commented on </span>
            <span class="font-semibold text-gray-900">
                <?php echo CHtml::encode($comment->post->title); ?>
            </span>
        </li>
    <?php endforeach; ?>
</ul>
