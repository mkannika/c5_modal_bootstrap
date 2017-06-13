<?php defined('C5_EXECUTE') or die(_("Access Denied."));

$this->addHeaderItem(Loader::helper('html')->javascript('tiny_mce/tiny_mce.js'));
Loader::element('editor_init');
Loader::element('editor_config', array('editor_mode' => 'ADVANCED')); ?>

<?php $modalObj=$controller; ?>

<div class="ccm-block-field-group">
	<label>Text button (Require)</label>
	<input type="text" name="text" value="<?php echo $modalObj->text; ?>">
</div>

<div class="ccm-block-field-group">
	<label>Header (Optional) <em>It will not show if you let it empty</em></label>
	<input type="text" name="heading" value="<?php echo $modalObj->heading;?>" placeholder="Modal Heading">
</div>

<div class="ccm-block-field-group">
	<label>Content (Require)</label>
	<?php echo $form->textarea('content', $content, array('class'=>'advancedEditor ccm-advanced-editor')) ?>
</div>
