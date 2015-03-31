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
?>
</body>
</html>
