<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<div class="ccm-ui">

	<div class="ccm-block-field-group">
		<label>Text button (Require)</label>
    <input type="text" name="text" value="" placeholder="Launch demo modal">
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
