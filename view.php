<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>

<div class="accordion-group">
  <div class="accordion-heading">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $bID; ?>">
      <?php echo $title; ?>
    </a>
  </div>
  <div id="collapse<?php echo $bID; ?>" class="accordion-body collapse <?php if($status == 1) { echo 'in'; } ?>">
    <div class="accordion-inner">
      <?php echo $content; ?>
    </div>
  </div>
</div>
