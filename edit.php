<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<?php $modalObj=$controller; ?>

<div class="ccm-block-field-group">
	<label>Text button (Require)</label>
	<input type="text" name="text" value="<?php echo $modalObj->text; ?>">
</div>

<div class="ccm-block-field-group">
	<label>Button Style</label>
	<select name="style">
		<option value="" <?php echo $modalObj->style == 0 ? ' selected="selected" ' : ''?>>Default</option>
		<option value="btn-primary" <?php echo $modalObj->style == 1 ? ' selected="selected" ' : ''?>>Primary</option>
		<option value="btn-info" <?php echo $modalObj->style == 2 ? ' selected="selected" ' : ''?>>Info</option>
		<option value="btn-success" <?php echo $modalObj->style == 3 ? ' selected="selected" ' : ''?>>Success</option>
		<option value="btn-warning" <?php echo $modalObj->style == 4 ? ' selected="selected" ' : ''?>>Warning</option>
		<option value="btn-danger" <?php echo $modalObj->style == 5 ? ' selected="selected" ' : ''?>>Danger</option>
		<option value="btn-inverse" <?php echo $modalObj->style == 6 ? ' selected="selected" ' : ''?>>Inverse</option>
	</select>
</div>

<div class="ccm-block-field-group">
	<label>Header (Optional) <em>It will not show if you let it empty</em></label>
	<input type="text" name="heading" value="<?php echo $modalObj->heading;?>" placeholder="Modal Heading">
</div>

<div class="ccm-block-field-group">
	<label>Content (Require)</label>
	<textarea name="content" rows="8" cols="80" class="advancedEditor ccm-advanced-editor"><?php echo $modalObj->content;?></textarea>
</div>
