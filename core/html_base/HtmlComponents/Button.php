<?php

require_once '/core/html_base/core/HtmlBase.php';

class Button extends HtmlBase{
    
    public function __construct($name, $caption = null, $id = null, $script = null, $style = null) {
        parent::__construct($name,$caption, $id, $script, $style);
    }

    public function Check() {
        //parent::Check();
    }

    public function __toString() {
        $code = "<input type='button' name='".$this->getName()."' value='".$this->getCaption()."'";
        if ($this->getStyle() != "")
          $code .= " style='".$this->getStyle ()."'";  
        if ($this->getScript() != "")
            $code .= " onClick='".$this->getScript()."'";
        $code .= "/>\n";
        return $code;
        //parent::__toString();
    }

    public function getCaption() {
        return parent::getCaption();
    }

    public function setCaption($caption) {
        parent::setCaption($caption);
    }
    
    public function getId() {
        return parent::getId();
    }

    public function getName() {
        return parent::getName();
    }

    public function getScript() {
        return parent::getScript();
    }

    public function getStyle() {
        return parent::getStyle();
    }

    public function setId($id) {
        parent::setId($id);
    }

    public function setName($name) {
        parent::setName($name);
    }

    public function setScript($script) {
        parent::setScript($script);
    }

    public function setStyle($style) {
        parent::setStyle($style);
    }

}

?>