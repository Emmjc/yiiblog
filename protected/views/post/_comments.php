<div class="comments">
    <?php if (!empty($comments)): ?>
        <h3>Comments</h3>
        <ul>
            <?php foreach ($comments as $comment): ?>
                <li>
                    <div class="comment-header">
                        <strong><?php echo CHtml::encode($comment->author); ?></strong>
                        <span class="comment-date">
                            <?php echo date('F j, Y \a	 h:i A', strtotime($comment->create_time)); ?>
                        </span>
                    </div>
                    <div class="comment-body">
                        <?php echo nl2br(CHtml::encode($comment->content)); ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No comments yet. Be the first to comment!</p>
    <?php endif; ?>
</div>