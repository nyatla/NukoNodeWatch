<?php
require_once("./watch_app_template.php");
$app=new JsonExportApp("NukoPubnodeStatus/0.1","../db/pubnodelog.db");
$app->run();
?>
