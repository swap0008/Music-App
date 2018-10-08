<html>
<?php

    require('connection.php');

?>

    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>

    <style type="text/css">
        body {
            background-color: #33cc33;
        }

        input {
            margin: 5px;
            outline: none;
        }

        input[type="text"] {
            width: 500px;
            border-top: none;
            border-right: none;
            border-left: none;
        }

        input[type="submit"] {
            margin-bottom: 20px;
        }

        input[type="text"]:hover {
            border-bottom: 2px solid black;
        }

        input[type="submit"]:hover {
            cursor: pointer;
        }


        #container {
            box-shadow: 0 10px 60px rgba(0, 0, 0, 0.6);
            margin-top: 20vh;
            width: 650px;
            margin-right: auto;
            margin-left: auto;
            border-radius: 20px;
            background-color: white;
        }

    </style>

    <body background="adminbg.jpg">
        <div id="container">
            <br>
            <center>
                <h1>Add Songs To Database</h1>
                <form method="POST">
                    <?php 
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $title = $_POST['title'];
                $artist = $_POST['artist'];
                $url = $_POST['song_url'];
                $art = "Art/".$_POST['url'];
                $len = $_POST['length'];
                
                $sql = "INSERT INTO list VALUES ('', '$title', '$artist', '$url', '$art', '$len')";
                
                if($conn->query($sql) == TRUE) {
                    echo "Song Successfully added to database<br>";
                } else {
                    echo "Error in Uploading Details<br>".$conn->error;
                }
            }
        
        ?>

                    <input type="text" name="title" placeholder="Title of song" required><br>
                    <input type="text" name="artist" placeholder="Artist Name" required><br>
                    <input type="text" name="song_url" placeholder="Exact Song Name In Folder" required><br>
                    <input type="text" name="url" placeholder="Album Art URL With Extension" required><br>
                    <input type="text" name="length" placeholder="Length of song" required><br>
                    <input type="submit" value="Add Song">
                </form>
            </center>
        </div>
    </body>

</html>
