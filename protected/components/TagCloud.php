<?php
    Yii::import('zii.widgets.CPortlet');

    class TagCloud extends CPortlet
    {
        public $title = 'Tags';
        public $maxTags = 20;

        protected function renderContent()
        {
            $tags = Tag::model()->findTagWeights($this->maxTags);

            echo '<div class="flex flex-wrap gap-2 mt-2">';

            foreach ($tags as $tag => $weight) {
                // Check if the tag belongs to at least one published post and get its count
                $postCount = Post::model()->countByAttributes(
                    ['status' => Post::STATUS_PUBLISHED], 
                    'tags LIKE :tag', 
                    [':tag' => "%$tag%"]
                );

                if ($postCount > 0) { // Only display tags that belong to published posts
                    $link = CHtml::link(CHtml::encode($tag) . " ({$postCount})", array('post/index', 'tag' => $tag), array(
                        'class' => 'hover:underline'
                    ));

                    echo CHtml::tag('span', array(
                        'class' => 'tag inline-block bg-gray-900 text-white px-3 py-1 rounded-lg transition-all duration-200 hover:bg-gray-700',
                        'style' => "font-size:12pt" . "pt",
                    ), $link) . "\n";
                }
            }

            echo '</div>';
        }
    }
?>
