<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="siwusekkk"/>
        <title>Skin finder</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="shortcut icon" href="assets/icon.png">
    </head>
    <body>
        <div id="container">
            <span id="dirtyText">Minecraft </span> <span id="title">Skin Finder</span></br>
            <span id="subtitle">Made by: </span> <span class="author">siwusekkk</span></br>
            <div id="input">Enter username:</div>
            <form action="skinfinder.php" method="post">
                <input id="username" type="text" name="username"/></br>
                <input id="generate" type="submit" name="find" value="Find"/>
            </form> </br></br></br>
            <?php
                $username = $_POST['username'];
                echo '
                <a href="https://minotar.net/download/'.$username.'">
                    <button id="download">Download skin</button></br></br></br>
                </a>';
                echo '<div>Avatar:</div></br>';
                echo '<img src="https://minotar.net/helm/'.$username.'"/></br></br></br>';
                echo '<div>Cube:</div></br>';
                echo '<img src="https://minotar.net/cube/'.$username.'"/></br></br></br>';
                echo '<div>Body:</div></br>';
                echo '<img src="https://minotar.net/armor/body/'.$username.'"/></br></br></br>';
                echo "<div>Skin's texture:</div></br>";
                echo '<img style="width:200px;" src="https://minotar.net/skin/'.$username.'"/></br></br></br>';
            ?>                   
        </div>
    </body>
</html>