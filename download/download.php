<?php
// header("Content-type:application/pdf");

// // It will be called downloaded.pdf
// header("Content-Disposition:attachment;filename='ehsan.pdf'");

// // The PDF source is in original.pdf
// readfile("original.pdf");

// $thumb_name = $_SERVER['DOCUMENT_ROOT'] . 'images/userphoto/1/2/2/59874a886a0356abc1_thumb9.jpg';
// if(file_exists($thumb_name)) {
//     some_code
// }

$file = $_SERVER['DOCUMENT_ROOT']."/download/download.pdf";
if(file_exists($file)){
    // echo "file exist";
    header("Content-Disposition: attachment;filename='Ehsan-Rafeeque'");
    readfile($file);
    header("Location:/home.php");
    
}else{
    echo "file does not exist";
    
    // echo __DIR__.$file;
    // echo "<br/>".$_SERVER['DOCUMENT_ROOT'];
}

?>
