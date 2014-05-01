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
           
           $script = "alert(\"test\")";
           $style = "background-color:#FFF667;width:250px";
           $button = new Button("test_btn","btn_test",null,$script,$style);
           echo $button;
           
           $button = new SubmitButton("test_btn","btn_test");
           echo $button; 
        ?>
    </body>
</html>
