<html>
<body>
      <h3> Universities </h3>
      
<?php

//tutorial from stackoverflow and php manual
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
      
      if(empty($_GET)){
      foreach($records as $record){
      	$i++;
      	$record_num = $i - 1;
	 echo '<a href='.'"http://local.project/project.php?record='.$record_num.'"'.'>'.$university[$record_num].'</a>';
	 echo'</p>';
       }
    }
?>
</body>
</html>
