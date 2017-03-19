<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>AnPr</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="skriptid.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="sisestus">
    <form action="send_data.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"></br>
        <input type="submit" value="Upload" name="submit"/>
    </form>
</div>
<div class="pildid">
    <?php
    echo '<div class="bigPic">';
    echo '<img src="" id="bigPicInside"/>';
    echo '</div>';
    $directory = "images/";
    $filecount = 0;
    $files = glob($directory . "*");
    foreach ($files as $oneFile) {
        echo '<img src="'.$oneFile.'" width="200" height="200" class="pic"/>';
    }
?>
</div>
</body>
</html>
