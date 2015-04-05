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
	 echo '<a href='.'"http://web.njit.edu/~ve23/project.php?record='.$recnum.'"'.'>'.$university[$recnum].'</a>';
	 echo'</p>';
       }
    }
    $record = $records[$_GET['record']];
    //table with varnames and their results from csv file
    echo"<table border='0'>";
    foreach($record as $varname=> $result){
       echo"<tr>";
       echo"<th>$varname</th>"
       echo"<td>$result</td>";
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
