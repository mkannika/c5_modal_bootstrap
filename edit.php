<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

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
	<textarea name="content" rows="8" cols="80" class="advancedEditor ccm-advanced-editor"><?php echo $modalObj->content;?></textarea>
</div>
