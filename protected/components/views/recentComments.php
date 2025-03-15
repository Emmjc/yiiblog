<ul>
    <?php foreach($this->getRecentComments() as $comment): ?>
        <li>
            <?php echo CHtml::link(CHtml::encode($comment->author), array('post/view', 'id'=>$comment->post->id)); ?>
            on
            <?php echo CHtml::encode($comment->post->title); ?>
        </li>
    <?php endforeach; ?>
</ul>
