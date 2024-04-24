<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rating.css">
    <title>Document</title>
</head>
<body>
    <h2>Rate This:</h2>
    <div class="rating">
    <?php
    for ($i= 5; $i >= 1; $i--){
        echo "<span class='star'data-rating='$i'>&#9733;</span>";
    }
?>
</div>

<div id="rating-message"></div>
    
</body>
</html>