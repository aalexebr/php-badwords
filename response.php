<?php
    $paragraph = $_GET['paragraph'];
    $cencoredWord = $_GET['censor']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>response Get</title>
</head>
<body>
    <h4>
        original 
    </h4>
    <h1>
        <?php
            echo $paragraph;
            echo '<br>';
            echo strlen($paragraph);
        ?>
    </h1>
    <h4>
        censored
    </h4>
    <h2>
        <?php
            echo str_replace($cencoredWord,'***',$paragraph);
            echo '<br>';
            echo strlen($paragraph);
        ?>
    </h2>
</body>
</html>