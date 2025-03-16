<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="bg-white shadow-md rounded-lg p-6 mb-4 border border-gray-200">
    
    <h2 class="text-xl font-bold text-gray-900 mb-2">
        <?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id), ['class' => 'hover:text-gray-600']); ?>
    </h2>

    <p class="text-sm text-gray-500">
        <span class="font-semibold">Post ID:</span> <?php echo CHtml::encode($data->id); ?>
    </p>

    <p class="text-gray-700 leading-relaxed mt-2">
        <?php echo CHtml::encode($data->content); ?>
    </p>

    <div class="mt-4 text-gray-600 text-sm">
        <span class="font-semibold">Tags:</span> <?php echo CHtml::encode($data->tags); ?>
    </div>

    <div class="mt-4 flex items-center justify-between">
        <span class="px-3 py-1 rounded-full text-white text-xs font-semibold 
            <?php echo ($data->status == 'Published') ? 'bg-green-500' : 'bg-gray-500'; ?>">
            <?php echo CHtml::encode($data->status); ?>
        </span>

        <span class="text-xs text-gray-500">
            <span class="font-semibold">Created:</span> <?php echo CHtml::encode($data->create_time); ?> |
            <span class="font-semibold">Updated:</span> <?php echo CHtml::encode($data->update_time); ?>
        </span>
    </div>

</div>
