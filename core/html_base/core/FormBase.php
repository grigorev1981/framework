<?php

abstract class FormBase {
    
    private $name;
    private $components = array();
    private $id;
    private $script;
    private $style; 

    public function __construct($name, $components, $id=null, $script = null,$style=null) {
        $this->components = $components;
        $this->id = $id;
        $this->script = $script;
        $this->style = $style;
    }
    
    public function __toString() {
        
    }
    
    
    public function Check() {
        
    }
    
    public function getName() {
        return $this->name;
    }

    public function getComponents() {
        return $this->components;
    }

    public function getId() {
        return $this->id;
    }

    public function getScript() {
        return $this->script;
    }

    public function getStyle() {
        return $this->style;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setComponents($components) {
        $this->components = $components;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setScript($script) {
        $this->script = $script;
    }

    public function setStyle($style) {
        $this->style = $style;
    }


}

?>