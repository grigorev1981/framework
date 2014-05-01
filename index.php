<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           require_once 'core/html_base/HtmlComponents/Button.php';
           require_once 'core/html_base/HtmlComponents/SubmitButton.php';
           require_once 'core/html_base/HtmlComponents/CancelButton.php';
           require_once 'core/html_base/HtmlComponents/EditBox.php';
           require_once 'core/html_base/HtmlComponents/ValuedEditBox.php';
           
           $script = "alert(\"test\")";
           $style = "background-color:#FFF667;width:250px";
           $button = new Button("test_btn","btn_test",null,$script,$style);
           echo $button;
           
           $button = new SubmitButton("test_btn","btn_submit");
           echo $button; 
           
           $button = new CancelButton("test_btn","btn_cancel");
           echo $button; 
           
           echo "<br/>";
           
           $button = new EditBox("test_btn","btn_cancel","id_1",$script);
           echo $button; 

           $button = new ValuedEditBox("test_btn",2,"btn_cancel","id_1",$script);
           $button->setValue("fffff");
           $button->setMax_len(5);
           echo $button;
           
        ?>
    </body>
</html>
