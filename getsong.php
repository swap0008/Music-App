<?php
    
    require('connection.php');
    

    $id = $_GET['id'];

    if (isset($id)) {
        $sql = "SELECT * FROM list WHERE id='$id'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $rows = $result->fetch_assoc();
            echo '{"title":"'.$rows['title'].'","artist":"'.$rows['artist'].'","url":"'.$rows['art'].'","song":"'.$rows['url'].'"}';
        } 
    }

?>