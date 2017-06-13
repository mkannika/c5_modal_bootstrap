<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php //$aObj=$controller; ?>
<div class="ccm-ui">
	<div class="ccm-block-field-group">
		<label for="">Title</label>
    <input type="text" name="title" value="<?php //echo $aObj->title; ?>">
	</div>

  <div class="ccm-block-field-group">
		<label for="">Show/Hide</label>
    <select name="status">
      <option value="0"<?php //echo $aObj->status == 0 ? ' selected="selected" ' : ''?>><?php   echo t('Show')?></option>
      <option value="1"<?php //echo $aObj->status == 1 ? ' selected="selected" ' : ''?>><?php echo t('Hide')?></option>
    </select>
	</div>

	<div class="ccm-block-field-group">
    <label for="">Content</label>
    <textarea name="content" rows="8" cols="80"><?php //echo $aObj->content; ?></textarea>
	</div>

</div>
