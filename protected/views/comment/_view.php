<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
    <?php echo CHtml::encode($data->content); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo $data->status == Comment::STATUS_PENDING 
        ? '<span style="color:orange;">Pending</span>' 
        : '<span style="color:green;">Approved</span>'; ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
    <?php echo date('F j, Y, g:i a', $data->create_time); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
    <?php echo CHtml::encode($data->author); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->url), $data->url, array('target'=>'_blank')); ?>
    <br />

    <?php if ($data->status == Comment::STATUS_PENDING): ?>
        <div>
            <?php echo CHtml::link(
                'Approve', 
                array('approve', 'id' => $data->id), 
                array('class' => 'btn btn-success')
            ); ?>
        </div>
    <?php endif; ?>

</div>
