<div class="max-w-4xl mx-auto mt-4 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300">
    
    <!-- Comment Header -->
    <div class="bg-secondary p-4 flex justify-between items-center">
        <div class="text-lg font-semibold text-primary">
            <?php echo CHtml::encode($data->author); ?>
        </div>
        <div class="text-sm text-primary">
            📅 <?php echo date('F j, Y, g:i a', $data->create_time); ?>
        </div>
    </div>

    <!-- Comment Content -->
    <div class="p-6">
        <p class="prose prose-lg text-primary leading-relaxed">
            <?php echo nl2br(CHtml::encode($data->content)); ?>
        </p>
    </div>

    <!-- Comment Footer -->
    <div class="bg-secondary p-4 flex justify-between items-center">
        <span class="<?php echo ($data->status == 2) ? 'text-green-600 font-bold' : 'text-yellow-500 font-bold'; ?>">
            <?php echo ($data->status == 2) ? '✅ Approved' : '⏳ Pending'; ?>
        </span>

        <a href="<?php echo CHtml::normalizeUrl(array('view', 'id' => $data->id)); ?>"
           class="text-primary font-medium hover:underline">
            View Comment #<?php echo CHtml::encode($data->id); ?>
        </a>
    </div>
</div>
