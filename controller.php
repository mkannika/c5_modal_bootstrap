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

	public function add (){
		$this->addHeaderItem(Loader::helper('html')->javascript('tiny_mce/tiny_mce.js'));
		Loader::element('editor_init');
		Loader::element('editor_config', array('editor_mode' => 'ADVANCED'));
	}

	public function edit() {
		$this->addHeaderItem(Loader::helper('html')->javascript('tiny_mce/tiny_mce.js'));
		Loader::element('editor_init');
		Loader::element('editor_config', array('editor_mode' => 'ADVANCED'));		
	}


}
