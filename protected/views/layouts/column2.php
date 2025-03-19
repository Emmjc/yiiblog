<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 mt-8">

    <!-- Main Content -->
    <div class="flex-1 bg-white shadow-lg rounded-lg p-6 border border-gray-200">
        <div id="content">
            <?php echo $content; ?>
        </div>
    </div>

    <!-- Sidebar -->
    <aside class="w-full lg:w-1/4 bg-gray-900 text-white shadow-lg rounded-lg p-6 border border-gray-800">
        <div id="sidebar">
            <?php if (!Yii::app()->user->isGuest): ?>
                <div class="mb-6">
                    <?php $this->widget('UserMenu'); ?>
                </div>
            <?php endif; ?>

                <div class="mb-6">
                    <h2 class="text-lg font-semibold border-b border-gray-700 pb-2 mb-3">Tag Cloud</h2>
                    <?php $this->widget('TagCloud', array(
                        'maxTags' => Yii::app()->params['tagCloudCount'],
                    )); ?>
                </div>

            <div>
                <h2 class="text-lg font-semibold border-b border-gray-700 pb-2 mb-3">Recent Comments</h2>
                <?php $this->widget('RecentComments', array(
                    'maxComments' => Yii::app()->params['recentCommentCount'],
                )); ?>
            </div>
        </div>
    </aside>

</div>

<?php $this->endContent(); ?>
