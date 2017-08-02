<?php

require_once('vendor/autoload.php');

// https://github.com/infostreams/excel-merge/issues/3
$files = array("/home/pauloconnell/projects/github/excel-merge/files/BHAA.Race.Master.xlsm",
    "/home/pauloconnell/projects/github/excel-merge/files/bhaa.dcc.5km.2017.xlsx");
//$options = array("overwrite" => true);
$merged = new ExcelMerge\ExcelMerge($files);
//$merged = new ExcelMerge\ExcelMerge($files);

//$merged->download("my-filename.xlsm");
$filename = $merged->save("./files/merged-filename.xlsm");

?>