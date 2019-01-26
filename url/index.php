<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>URL Shorten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
<script type="text/javascript">
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
        } 
        else {
            document.getElementById('ifYes').style.display = 'none';
        }
    }

</script>  
</head>
<body>
    <div class="container">
        <h1>Shorten Your URL</h1>
        <form action="short.php" method="POST">
            <lable>URL Type</lable>
            <input type="radio" name="grp" value="Radom" onclick="javascript:yesnoCheck();" id='noCheck' checked>Random
            <input type="radio" name="grp" value="Custom" onclick="javascript:yesnoCheck();" id='yesCheck'> Custom<br>
            <lable class="url">URL:</lable>
            <input type="url" name="url" placeholder="Enter URL Here" required>
            <div id="ifYes" style="display:none">
            <lable>Key Word</lable>
            <input type="text" name="keyword" placeholder="Enter Key Word">
            </div>
            <br>
            <input type="submit" value="Shorten URL">
            <?php
                if (isset($_SESSION['feedback'])){
                    echo $_SESSION['feedback'];
                    unset($_SESSION['feedback']);
                }
            ?>
        </form>
    </div>
</body>
</html>