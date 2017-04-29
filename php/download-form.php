<?php
echo "debug test";
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['download'])){
    $file = $_SERVER["DOCUMENT_ROOT"].'/TalkUX2017Sponsorship-Eng-Version.pdf';
    //echo basename($file);
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    //header("Content-Type: application/download");
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
