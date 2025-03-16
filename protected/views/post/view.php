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
            <span>📅 Published on: <?php echo date('F d, Y', strtotime($model->create_time)); ?></span>
            <span class="<?php echo ($model->status = 2) ? 'text-green-600 font-bold' : 'text-yellow-500 font-bold'; ?>">
                <?php echo ($model->status = 2) ? '✅ Published' : '⏳ Draft'; ?>
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
<div class="max-w-3xl mx-auto mt-8 p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-sm">

    <!-- Comment Count -->
    <?php if ($model->commentCount >= 1): ?>
        <h3 class="text-lg font-semibold text-gray-800">
            <?php echo $model->commentCount . ' Comment(s)'; ?>
        </h3>

        <?php $this->renderPartial('_comments', array(
            'post' => $model,
            'comments' => $model->comments,
        )); ?>
    <?php endif; ?>

    <!-- Leave a Comment -->
    <h3 class="text-lg font-semibold text-gray-800 mt-6">Leave a Comment</h3>

    <?php if (Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="p-4 bg-green-100 text-green-700 rounded-md mt-4">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/comment/_form', array(
            'model' => $comment,
        )); ?>
    <?php endif; ?>
</div>
