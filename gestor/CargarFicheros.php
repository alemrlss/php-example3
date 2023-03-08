<?php

$fichero = $_FILES["file"];

move_uploaded_file($fichero["tmp_name"], "subidas/".$fichero["name"]);


header("Location: " . $_SERVER["HTTP_REFERER"]);
?>