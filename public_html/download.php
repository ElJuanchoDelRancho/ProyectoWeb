<?php

    if (isset($_GET['filename']) && isset($_GET['path'])) {
        $filename = $_GET["filename"];
        $filepath = $_GET["path"];
        if(file_exists($filepath)):
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$filename");
            header("Content-Type: application/pdf");
            header("Content-Transfer-Encoding: binary");
            readfile($filepath);
            exit;
        endif;

        echo $filename;
        echo $filepath;
    }
    
?>