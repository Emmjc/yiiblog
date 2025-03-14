<?php if (!empty($comments)): ?>
    <h3><?php echo count($comments) . ' Comment(s)'; ?></h3>

    <ul class="comment-list">
        <?php foreach ($comments as $comment): ?>
            <li class="comment-item">
                <div class="comment-header">
                    <strong><?php echo CHtml::encode($comment->author); ?></strong>
                    <span class="comment-date">
                        <?php echo date('F j, Y \a\t g:i a', $comment->create_time); ?>
                    </span>
                </div>

                <div class="comment-content">
                    <?php echo nl2br(CHtml::encode($comment->content)); ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No comments yet. Be the first to share your thoughts!</p>
<?php endif; ?>
