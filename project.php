<html>
<body>
      <h3> Universities </h3>
      
<?php
$array = file('public_html/hd2013.csv');

foreach($array as $key => $var)
{
   $array[$key] = explode(',' , $var);
}

echo '<table class ="samples">';
foreach ($array as $key => $value)
{
  $i++;
  echo '<tr class=d' . ($i & 1) . ' align="center">';
  echo '<td>' . $arrary[$key][0] . </td>';
  echo '</tr>';
}

echo '</table>';
//try this from stackoverflow and php manual?
 public $csv;
   public $column;
   public function readcsv($csv,$column){
      ini_set('auto_detect_line_endings',TRUE);
      if(($handle = fopen($csv,"r")) !== FALSE){
         while(($row=fgetcsv($handle,",")) !== FALSE){
	    if($column == TRUE){
	       $column = $row;
	       $column = FALSE;
	    }
	    else{
	       $record = array_combine($column,$row);
	       $records[] = $record;
	       $university[] = $row[1]; 
	       //creates array for university names
	    }
	 }
      fclose($handle);
      }
?>
</body>
</html>
