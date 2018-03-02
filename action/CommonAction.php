<?php
    session_start();
    require_once('Constants.php');
    require_once('Translator.php');

    abstract class CommonAction {
        protected static $DISABLED_ROLE = 0;
        protected static $PUBLIC_ROLE = 1;
        protected static $MEMBER_ROLE = 2;
        protected static $MODERATOR_ROLE = 3;
        protected static $ADMIN_ROLE = 4;
        protected static $OWNER_ROLE = 5;

        protected $pageName;
        protected $translator;

        private $pageVisibility;

        public function __construct($pageVisibility) {
            $this->pageVisibility = $pageVisibility;
        }

        public function execute() {
            if(!isset($_SESSION['role'])) {
                $_SESSION['role'] = CommonAction::$PUBLIC_ROLE;
            }
            
            if(!isset($_SESSION['lang'])) {
                $currentLang = currentLang;
                $_SESSION['lang'] = $currentLang;

                $this->translator = new Translator($_SESSION['lang']);
            }
            else {
                if(isset($_GET['lang']) && strlen($_GET['lang']) > 0) {
                    $currentLang = $_GET['lang'];
                    $_SESSION['lang'] = $currentLang;
                }
                $this->translator = new Translator($_SESSION['lang']);
            }
            $this->executeAction();
        }
        
        public function getTranslator() {
            return $this->translator;
        }

        public function getLang() {
            switch ($_SESSION['lang']) {
                case 'fr':
                    return 'FRANÇAIS';
                case 'ru':
                    return 'русский';
                case 'en':
                    return 'ENGLISH';
                case 'de':
                    return 'DEUTSCH';
                case 'it':
                    return 'ITALIANO';
                case 'cz':
                    return 'ČESKY';
            }
        }

        abstract protected function executeAction();

        abstract public function getTitle();
    }