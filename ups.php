<?php
$nime = $_GET["nap"];

$ds=DIRECTORY_SEPARATOR;//1
$storeFolder = 'imgs';//2
 
if(!empty($_FILES)){
    $tempFile = $_FILES['file']['tmp_name'];//3             
    $targetPath = dirname( __FILE__ ).$ds.$storeFolder.$ds;//4
    $targetFile = $targetPath.$nime;//5
 
    print_r($_FILES);
    move_uploaded_file($tempFile,$targetFile);//6
}

?>