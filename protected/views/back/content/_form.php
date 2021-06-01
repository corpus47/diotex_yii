<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pageId'); ?>
		<?php echo $form->textField($model,'pageId'); ?>
		<?php echo $form->error($model,'pageId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slug'); ?>
		<?php echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'slug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metaTitle'); ?>
		<?php echo $form->textField($model,'metaTitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metaTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metaDescription'); ?>
		<?php echo $form->textField($model,'metaDescription',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metaDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metaKeywords'); ?>
		<?php echo $form->textField($model,'metaKeywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metaKeywords'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->