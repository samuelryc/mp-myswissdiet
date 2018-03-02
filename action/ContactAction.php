<?php
    require_once('CommonAction.php');

    class ContactAction extends CommonAction { 

        private $success = null;

        public function __construct() {
            parent::__construct(CommonAction::$PUBLIC_ROLE);
        }

        protected function executeAction() {
            if(isset($_POST['name']) && strlen($_POST['name']) > 0 && isset($_POST['email']) && strlen($_POST['email']) > 0 &&
                isset($_POST['message']) && strlen($_POST['message']) > 0) {

                $to = 'info@myswissdiet.com';
                $subject = 'New message from ' . $_POST['name'];
                $email = $_POST['email'];
                $headers = 'From: ' . $_POST['name'] . ' <' . $email . '>';
                $message = $_POST['message'];
                mail($to, $subject, $message, $headers);

                $this->success = 1;

                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['message'] = $_POST['message'];
            }
        }

        public function getSuccess() {
            return $this->success;
        }

        public function getTitle() {
            $page = $this->getTranslator();
            $title = $page->read('metadata', array('title', 'contact'));
            return $title;
        }
    }