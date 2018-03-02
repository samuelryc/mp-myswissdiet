<?php
    class Translator {
        private $xmlFile;

        public function __construct($lang) {
            $this->xmlFile = new SimpleXMLElement('lang/' . $lang . '.xml', null, true);                    
        }

        public function read($page, $nodes) {
            if(is_array($nodes)) {
                $value =  $this->xmlFile->$page;
                foreach ($nodes as $node) {
                    $value = $value->$node;
                }
            }
            else {
                $value =  $this->xmlFile->$page->$nodes;
            }

            if (strlen($value) == 0) {
                $value = '<i>Missing text</i>';     
            }

            return $value;
        }
    }