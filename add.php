<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<div class="ccm-ui">
	<div class="ccm-block-field-group">
		<label for="">Title</label>
    <input type="text" name="title" value="">
	</div>

  <div class="ccm-block-field-group">
		<label for="">Show/Hide</label>
    <select name="status">
			<option value="0"><?php echo t('Hide')?></option>
      <option value="1"><?php echo t('Show')?></option>
    </select>
	</div>

	<div class="ccm-block-field-group">
    <label for="">Content</label>
    <textarea name="content" style="width:95%;height: 200px;resize:none;"></textarea>
	</div>

</div>
