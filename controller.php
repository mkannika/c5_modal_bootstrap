<?php defined('C5_EXECUTE') or die(_("Access Denied."));

class AccordionBootstrapBlockController extends BlockController {

	protected $btTable = "btAccordionBootstrap";
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "300";

	public function getBlockTypeName() {
		return t('Accordion Bootstrap');
	}

	public function getBlockTypeDescription() {
		return t('Create an accordion with the panel component Bootstrap.');
	}

	public function view() {
			/*$html = Loader::helper('html');
			$bv = new BlockView();
			$bv->setBlockObject($this->getBlockObject());
			$blockURL = $bv->getBlockURL();
			$this->addFooterItem($html->css($blockURL.'/css/bootstrap.css'));
			$this->addFooterItem($html->javascript($blockURL.'/js/bootstrap.js'));*/
	}
}
