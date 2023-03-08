<?php

unlink($_GET["name"]);


header("Location: " . $_SERVER["HTTP_REFERER"])
?>