<?php
/**
 * Recruitment Sessions (recruitment-sessions)
 * @var $this BatchController
 * @var $model RecruitmentSessions
 * @var $form CActiveForm
 * version: 0.0.1
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2016 Ommu Platform (opensource.ommu.co)
 * @created date 8 March 2016, 12:04 WIB
 * @link http://company.ommu.co
 * @contact (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'Recruitment Sessions'=>array('manage'),
		'Create',
	);
?>

<?php $form=$this->beginWidget('application.components.system.OActiveForm', array(
	'id'=>'recruitment-sessions-form',
	'enableAjaxValidation'=>true,
	//'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>
<div class="dialog-content">

	<fieldset>
		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'parent_id'); ?>
			<div class="desc">
				<?php if(RecruitmentSessions::getSession('0') != null)
					echo $form->dropDownList($model,'parent_id', RecruitmentSessions::getSession('0'), array('prompt'=>'Pilih Session'));
				else 
					echo $form->dropDownList($model,'parent_id', array('prompt'=>'Pilih Session'));?>
				<?php echo $form->error($model,'parent_id'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'session_name'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'session_name',array('maxlength'=>32)); ?>
				<?php echo $form->error($model,'session_name'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'session_time_start'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'session_time_start'); ?>
				<?php echo $form->error($model,'session_time_start'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'session_time_finish'); ?>
			<div class="desc">
				<?php echo $form->textField($model,'session_time_finish'); ?>
				<?php echo $form->error($model,'session_time_finish'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'publish'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'publish'); ?>
				<?php echo $form->labelEx($model,'publish'); ?>
				<?php echo $form->error($model,'publish'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') ,array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Close'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>


