<?php
/* @var $this ContentController */
/* @var $data Content */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pageId')); ?>:</b>
	<?php echo CHtml::encode($data->pageId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slug')); ?>:</b>
	<?php echo CHtml::encode($data->slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metaTitle')); ?>:</b>
	<?php echo CHtml::encode($data->metaTitle); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('metaDescription')); ?>:</b>
	<?php echo CHtml::encode($data->metaDescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metaKeywords')); ?>:</b>
	<?php echo CHtml::encode($data->metaKeywords); ?>
	<br />

	*/ ?>

</div>