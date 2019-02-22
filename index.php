<?php
    header('Content-Type: application/json');
    $file = './vampireData.json';

    if(!empty($_POST)    // or if(!empty($_POST))
    {
        file_put_contents($file, $_POST["jsonTxt"]);
        //may be some error handeling if you want
    }
    else if(!empty($_GET))
        // or else if(!empty($_GET))
    {
        echo file_get_contents($file);
        //may be some error handeling if you want
    }
?> 
