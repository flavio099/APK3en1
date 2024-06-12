<?php 

require_once("Button.php");
require_once("Input.php");
require_once("Textarea.php");
require_once("Select.php");
require_once("Checkbox.php");
require_once("Form.php");
require_once("FileUpload.php");
require_once("Radio.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
  echo $input->render();
  echo $input->render();
  echo $button->render();
  echo $textarea->render();
  echo $select->render();
  echo $checkbox->render();
  echo $form->render();
  echo $FileUpload->render();
  echo $radio->render();
 
 ?>
</body>
</html>