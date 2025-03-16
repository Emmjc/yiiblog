<div class="max-w-4xl mx-auto mt-4 bg-white shadow-lg rounded-lg overflow-hidden border border-gray-300">
    
    <!-- Comment Header -->
    <div class="bg-gray-100 p-4 flex justify-between items-center">
        <div class="text-lg font-semibold text-gray-800">
            <?php echo CHtml::encode($data->author); ?>
        </div>
        <div class="text-sm text-gray-500">
            📅 <?php echo date('F d, Y', strtotime($data->create_time)); ?>
        </div>
    </div>

    <!-- Comment Content -->
    <div class="p-6">
        <p class="prose prose-lg text-gray-700 leading-relaxed">
            <?php echo nl2br(CHtml::encode($data->content)); ?>
        </p>
    </div>

    <!-- Comment Footer -->
    <div class="bg-gray-100 p-4 flex justify-between items-center">
        <span class="<?php echo ($data->status == 2) ? 'text-green-600 font-bold' : 'text-yellow-500 font-bold'; ?>">
            <?php echo ($data->status == 2) ? '✅ Approved' : '⏳ Pending'; ?>
        </span>

        <a href="<?php echo CHtml::normalizeUrl(array('view', 'id' => $data->id)); ?>"
           class="text-blue-600 font-medium hover:underline">
            View Comment #<?php echo CHtml::encode($data->id); ?>
        </a>
    </div>
</div>
