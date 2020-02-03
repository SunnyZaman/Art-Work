<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate" />
    <meta http-equiv="Content-Language" content="en_US" /> 
    <title>Edited Art Work</title>
</head>
    <body>
        <?php 
            foreach($_POST['art'] as $key => $value) {
                if(is_array($value)){
                    echo "<div><strong>{$key}: </strong>";
                    echo implode(", ", $value);
                    echo "</div>";
                }
                else{
                    echo "<div>
                       <strong>{$key}: </strong>{$value} 
                    </div>";
                }
            }
        ?>
    </body>
</html>