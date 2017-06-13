<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<!-- Button to trigger modal -->
<a href="#modal-<?php echo $bID; ?>" role="button" class="btn" data-toggle="modal"><?php echo $text; ?></a>

<!-- Modal -->
<div id="modal-<?php echo $bID; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel-<?php echo $bID; ?>" aria-hidden="true">

  <?php if($heading != ""): ?>
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="modalLabel-<?php echo $bID; ?>"><?php echo $heading; ?></h3>
    </div>
  <?php endif; ?>

  <div class="modal-body">
    <?php echo $content; ?>
  </div>

  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
