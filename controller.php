<?php defined('C5_EXECUTE') or die(_("Access Denied."));

class ModalBootstrapBlockController extends BlockController {

	protected $btTable = "btModalBootstrap";
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "300";

	public function getBlockTypeName() {
		return t('Modal Bootstrap');
	}

	public function getBlockTypeDescription() {
		return t('Create an modal block with the Bootstrap framework.');
	}
}
