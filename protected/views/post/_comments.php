<?php if (!empty($comments)): ?>
    <h3><?php echo count($comments); ?> Comments</h3>
    <ul>
        <?php foreach ($comments as $comment): ?>
            <li>
                <strong><?php echo CHtml::encode($comment->author); ?>:</strong>
                <p><?php echo CHtml::encode($comment->content); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No comments yet.</p>
<?php endif; ?>