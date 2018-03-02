<?php
    require_once('CommonAction.php');
    
    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$PUBLIC_ROLE);
        }
        
        protected function executeAction() {}

        public function getTitle() {
        	$page = $this->getTranslator();
        	$title = $page->read('metadata', array('title', 'index'));
        	return $title;
        }
    }