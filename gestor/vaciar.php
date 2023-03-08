<?php
$files = glob('subidas/*'); 
foreach($files as $file){
    if(is_file($file))
    unlink($file);
echo "Elementos eliminados correctamente!!";
}
?>

<script>window.location.replace("./index.php");</script>//Redirección