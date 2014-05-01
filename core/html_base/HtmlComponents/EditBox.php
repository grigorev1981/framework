<?php

require_once '/core/html_base/core/HtmlBase.php';

class EditBox extends HtmlBase{
    public function __construct($name, $value = null, $id = null, $style = null) {
        parent::__construct($name, $value, $id, null, $style);
    }

    public function Check() {
        parent::Check();
    }

    public function __toString() {
        $code = "<input type='edit' name='".$this->getName()."' value='".$this->getCaption()."'";
        if ($this->getStyle() != "")
          $code .= " style='".$this->getStyle ()."'";  
        $code .= "/>\n";
        return $code;
    }

    public function getCaption() {
        return parent::getCaption();
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

    public function setCaption($caption) {
        parent::setCaption($caption);
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