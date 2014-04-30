<?php

abstract class HtmlBase {
    
    private $name;
    private $id;
    private $script;
    private $style;
    private $caption;


    public function __construct($name,$caption = null, $id=null,$script=null,$style=null) {
        $this->id = $id;
        $this->name = $name;
        $this->script = $script;
        $this->style = $style;
        $this->caption = $caption;
    }
    
    public function getCaption() {
        return $this->caption;
    }

    public function setCaption($caption) {
        $this->caption = $caption;
    }

        
    public function __toString(){}
    
    public function Check(){}
    
    public function getName() {
       return $this->name;
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