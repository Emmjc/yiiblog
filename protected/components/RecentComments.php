<?php
Yii::import('zii.widgets.CPortlet');

class RecentComments extends CPortlet
{
    public $title = '';
    public $maxComments = 5;

    public function getRecentComments()
    {
        // Fetch recent comments for published posts with non-pending status
        return Comment::model()->findAll(array(
            'condition' => 'post.status = :postStatus AND t.status != :commentStatus',
            'params' => [
                ':postStatus' => Post::STATUS_PUBLISHED,
                ':commentStatus' => Comment::STATUS_PENDING,
            ],
            'join' => 'JOIN {{post}} post ON post.id = t.post_id',
            'order' => 't.create_time DESC',
            'limit' => $this->maxComments,
        ));
    }

    protected function renderContent()
    {
        $recentComments = $this->getRecentComments();

        // Render only if there are comments for published posts and non-pending status
        if (!empty($recentComments)) {
            $this->render('recentComments', ['recentComments' => $recentComments]);
        }
    }
}
?>
