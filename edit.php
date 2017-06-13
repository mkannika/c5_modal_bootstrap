<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

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
	<textarea id="ccm-content-<?php echo $a->getAreaID()?>" class="advancedEditor ccm-advanced-editor" name="content" style="width: 580px; height: 380px"><?php echo $modalObj->content; ?></textarea>
</div>
