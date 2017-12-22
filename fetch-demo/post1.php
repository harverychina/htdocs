<?php
header("Content-type: text/jsonp; charset=utf-8");

echo 'callback('.json_encode($_GET).')';

?>