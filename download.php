<?php 
    if (isset($_GET['filename'])) {
    $back_dir    ="file/";
    $tabel       =$_GET['tabel'];
    $filename    = $_GET['filename'];
    $file = $back_dir.$tabel.'/'.$filename;
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
        else {
            $_SESSION['pesan'] = "Oops! File - $filename - not found ...";
            header("location:index.php");
        }
    }
?>