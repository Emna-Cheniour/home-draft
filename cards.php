
<div>
<?php

include_once ("autoload.php");

$categories = [];
foreach($_POST as $key => $value){
    // if(($key!="minPrice")&&($key!="maxPrice")&&($key!="tri"))
    
  array_push($categories, $value);
    
  }
  echo "<h3>";
    print_r($categories);
    echo "</h3>";
?>
