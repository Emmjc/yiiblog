<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comment', 'url'=>array('index')),
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Update Comment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
?>

<div class="max-w-3xl mx-auto mt-8 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300">
    
    <!-- Header -->
    <div class="bg-black p-6">
        <h1 class="text-3xl font-extrabold text-white">
            Comment #<?php echo $model->id; ?>
        </h1>
    </div>

    <!-- Main Content -->
    <div class="p-8">
        <!-- Comment Content (Main Focus) -->
        <div class="prose prose-lg text-gray-900 leading-relaxed bg-gray-100 p-6 rounded-md border border-gray-300 shadow-sm">
            <?php echo nl2br(CHtml::encode($model->content)); ?>
        </div>

        <!-- Metadata Section -->
        <div class="mt-6 text-gray-600 text-sm space-y-3">
            <div class="flex justify-between">
                <span>📅 Created on: <?php echo date('F d, Y', strtotime($model->create_time)); ?></span>
                <span class="<?php echo ($model->status == 2) ? 'text-green-600 font-bold' : 'text-yellow-500 font-bold'; ?>">
                    <?php echo ($model->status == 2) ? '✅ Approved' : '⏳ Pending'; ?>
                </span>
            </div>

            <div><span class="font-semibold">✍️ Author:</span> <?php echo CHtml::encode($model->author); ?></div>
            <div><span class="font-semibold">📧 Email:</span> <?php echo CHtml::encode($model->email); ?></div>
            <div>
                <span class="font-semibold">🔗 URL:</span> 
                <a href="<?php echo CHtml::encode($model->url); ?>" class="text-blue-600 hover:underline">
                    <?php echo CHtml::encode($model->url); ?>
                </a>
            </div>
            <div><span class="font-semibold">📝 Post ID:</span> <?php echo CHtml::encode($model->post_id); ?></div>
        </div>
    </div>
</div>



<div class="max-w-3xl mx-auto mt-6 bg-white shadow-md rounded-lg overflow-hidden border border-gray-200 p-6">
    
    <!-- Comment Header -->
    <div class="flex justify-between items-center border-b pb-3 mb-4">
        <div class="text-gray-700 font-semibold">
            <?php echo CHtml::encode($model->author); ?>
        </div>
        <div class="text-sm text-gray-500">
            📅 <?php echo date('F j, Y, g:i a', strtotime($model->create_time)); ?>
        </div>
    </div>

    <!-- Comment Content -->
    <div class="prose prose-sm text-gray-900 leading-relaxed bg-gray-100 p-4 rounded-md border border-gray-300 shadow-sm">
        <?php echo nl2br(CHtml::encode($model->content)); ?>
    </div>

    <!-- Comment Actions -->
    <div class="mt-4 flex justify-between items-center">
        <div class="text-sm font-semibold 
            <?php echo ($model->status == Comment::STATUS_PENDING) ? 'text-yellow-500' : 'text-green-600'; ?>">
            <?php echo ($model->status == Comment::STATUS_PENDING) ? '⏳ Pending Approval' : '✅ Approved'; ?>
        </div>

        <?php if($model->status == Comment::STATUS_PENDING): ?>
            <form action="<?php echo Yii::app()->createUrl('comment/approve', array('id' => $model->id)); ?>" method="post">
                <button type="submit" 
                        onclick="return confirm('Are you sure you want to approve this comment?');"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">
                    Approve
                </button>
            </form>
        <?php endif; ?>
    </div>
</div>


