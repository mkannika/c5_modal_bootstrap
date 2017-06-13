<?php defined('C5_EXECUTE') or die(_("Access Denied."))
$bt->inc('editor_init.php'); ?>

<div class="ccm-ui">
	<div class="ccm-block-field-group">
		<label>Text button</label>
    <input type="text" name="text" value="">
	</div>

	<div class="ccm-block-field-group">
		<label>Header</label>
		<input type="text" name="heading" value="" placeholder="Modal Heading">
	</div>

	<div class="ccm-block-field-group">
		<label>Content</label>
		<textarea id="ccm-content-<?php echo $a->getAreaID()?>" class="advancedEditor ccm-advanced-editor" name="content" style="width: 580px; height: 380px"></textarea>
	</div>

</div>
