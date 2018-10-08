<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Music Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">


</head>

<body background="bg.jpg">
    <div class="table">
        <div class="table-cell">
            <div id="player">
                <div id="main">
                    <div>
                        <div class="playback_controls">
                            <h2 id="title">Title</h2>
                            <h3 id="artist">Artist</h3>
                            <br>
                            <div>
                                <i class="fa fa-bars menu"></i>
                                <audio controls controlsList="nodownload" width="600">
                                    <source src="Music/${data.song}.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <ol id="playlist">
                    <?php
                        require('connection.php');

                        $sql = "SELECT * FROM list";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($rows = $result->fetch_assoc()) {
                    ?>

                        <li class="playing">
                            <a class="track" href="<?php echo "#".$rows["id"] ?>">
                                <?php echo $rows["title"] ?>
                            </a> <span class="time"><?php echo $rows["len"] ?></span></li>

                        <?php } } ?>
                </ol>
            </div>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>
