<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<div class="ccm-ui">

	<div class="ccm-block-field-group">
		<label>Text button (Require)</label>
    <input type="text" name="text" value="" placeholder="Launch demo modal">
	</div>

	<div class="ccm-block-field-group">
		<label>Button Style</label>
		<select name="style">
			<option value="">Default</option>
			<option value="btn-primary">Primary</option>
			<option value="btn-info">Info</option>
			<option value="btn-success">Success</option>
			<option value="btn-warning">Warning</option>
			<option value="btn-danger">Danger</option>
			<option value="btn-inverse">Inverse</option>
		</select>
	</div>

	<div class="ccm-block-field-group">
		<label>Header (Optional) <em>It will not show if you let it empty</em></label>
		<input type="text" name="heading" value="" placeholder="Modal Heading">
	</div>

	<div class="ccm-block-field-group">
		<label>Content (Require)</label>
		<textarea name="content" rows="8" cols="80" class="advancedEditor ccm-advanced-editor"></textarea>
	</div>

</div>
