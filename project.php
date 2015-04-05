<html>
<body>
      <h3> Universities </h3>
      
<?php

//tutorial from stackoverflow and php manual
   public $csv;
   public $column;
   public function readcsv($csv,$column){
   
   
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
      //records for the page 
      if(empty($_GET)){
      foreach($records as $record){
      	$i++;
      	$recnum= $i;
	 echo '<a href='.'"http://localhost/project/project.php?record='.$recnum.'"'.'>'.$university[$record_num].'</a>';
	 echo'</p>';
       }
    }
    $record = $records[$_GET['record']];
    echo"<table border='1'>";
    foreach($record as $key => $input){
       echo"<tr>";
       echo"<th>University</th>"
       echo"<td>$input</td>";
       echo"</tr>";
    }
    echo"</table>";
  }
}
//hd2013.csv is shorter version of it because full wouldn't load in afs
$file = new csvfile();
$file->readcsv("hd2013.csv", TRUE);
?>
</body>
</html>
