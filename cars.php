<?php
 
//require_once('csv-tools.php');
ini_set('memory_limit', '560M');

 $FileName  = "car-db.csv";
 $csvData = getCsvData($FileName);
 $result = [];
 $arr = array ('first' => 'a', 'second' => 'b');
 $key = array_search('a', $arr);
 $header = $csvData[0];
 $keyMaker = array_search('make', $header);
 $keyModel = array_search('model', $header);
 
 function getCsvData($FileName, $withHeader = true){
  
     if (!file_exists($FileName)) {
         echo "$FileName nem található. ";
         return false;
     }
  
     if (file_exists($FileName)) {
         $csvFile = fopen($FileName, 'r');
         $header = fgetcsv($csvFile);
         if ($withHeader){
            $lines[] = $header;
         }
         else{
            $lines = [];
         }
         while (! feof($csvFile)) {
             $line = fgetcsv($csvFile);
             $lines[] = $line;
         }
         fclose($csvFile);
         return $lines;
     }
 }
  


?>