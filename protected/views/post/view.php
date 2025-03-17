<?php
$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->title,
);
?>

<div class="max-w-4xl mx-auto mt-8 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300">
    
    <!-- Featured Post Title -->
    <div class="bg-black p-6">
        <h1 class="text-3xl font-extrabold text-white">
            <?php echo CHtml::encode($model->title); ?>
        </h1>
    </div>

    <!-- Blog Content -->
    <div class="p-8">
        <div class="text-gray-500 text-sm flex justify-between items-center mb-4">
        <span>📅 Published on: <?php echo date('F d, Y', $model->create_time); ?></span>
            <span class="<?php 
                echo ($model->status == 1) ? 'text-yellow-500 font-bold' : 
                    (($model->status == 2) ? 'text-green-600 font-bold' : 
                    'text-gray-500 font-bold'); 
            ?>">
                <?php 
                    echo ($model->status == 1) ? '⏳ Draft' : 
                        (($model->status == 2) ? '✅ Published' : 
                        '📂 Archived'); 
                ?>
            </span>
        </div>

        <div class="text-gray-700 mb-6">
            <span class="font-semibold">✍️ Author: </span> 
            <?php echo CHtml::encode($model->author_id); ?>
        </div>

        <div class="prose prose-lg text-gray-900 leading-relaxed">
            <?php echo nl2br(CHtml::encode($model->content)); ?>
        </div>
    </div>
</div>


<!-- Comments Section -->
<div class="max-w-3xl mx-auto mt-8 p-6 bg-white text-gray-900 border border-gray-300 rounded-lg shadow-lg">

    <!-- Comment Count -->
    <?php if ($model->commentCount >= 1): ?>
        <h3 class="text-xl font-semibold border-b border-gray-300 pb-2 mb-4">
            <?php echo $model->commentCount . ' Comment(s)'; ?>
        </h3>

        <div class="space-y-6">
            <?php foreach ($model->comments as $comment): ?>
                <div class="p-4 bg-gray-100 rounded-md shadow-sm border border-gray-200">
                    <p class="text-sm text-gray-600"><?php echo CHtml::encode($comment->author); ?> • <?php echo date('F j, Y', $comment->create_time); ?>

                    <p class="mt-2 text-gray-800"><?php echo CHtml::encode($comment->content); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Leave a Comment -->
    <h3 class="text-lg font-semibold mt-8 border-b border-gray-300 pb-2">Leave a Comment</h3>

    <?php if (Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="p-4 bg-green-100 text-green-800 rounded-md mt-4 border border-green-300">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <div class="mt-6 bg-gray-50 p-4 rounded-lg border border-gray-300 shadow-sm">
            <?php $this->renderPartial('/comment/_form', array(
                // 'model' => $comment,
				'model' => new Comment()
            )); ?>
        </div>
    <?php endif; ?>
</div>


