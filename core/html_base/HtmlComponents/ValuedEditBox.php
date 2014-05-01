<?php

require_once 'HtmlConsts.php';

class ValuedEditBox extends EditBox {
    
    private $edittype;
    private $value;
    private $max_len;


    public function __construct($name, $edittype, $caption = null, $id = null,$style = null) {
        parent::__construct($name, $caption, $id, $style);
        if (is_numeric($edittype))
         $this->edittype = $edittype;
        else
          throw new Exception("edit type of BOX is not correct");  
      $this->max_len = editbox_maxsymbols;
    }

    public function Check() {
        $result = false;
        if (isset($this->edittype)){
            switch ($this->edittype) {
                case editbox_integer:
                    if (is_numeric($this->value))
                      $result = true;  
                    break;
                case editbox_text:    
                    if (is_string($this->value))
                      $result = true;  
                case editbox_mixed:    
                    if (isset($this->value))
                      $result = true;  
                default:
                    $result = false;
            }
        }
        return $result;
    }
    
    public function getMax_len() {
        return $this->max_len;
    }

    public function setMax_len($max_len) {
        $this->max_len = $max_len;
    }

        
    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function __toString() {
        $code = "<input type='edit' name='".$this->getName()."' value='".$this->getValue()."'";
        if ($this->getStyle() != "")
          $code .= " style='".$this->getStyle ()."'";  
        $code .= "maxlength='".$this->getMax_len()."'/>\n";
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