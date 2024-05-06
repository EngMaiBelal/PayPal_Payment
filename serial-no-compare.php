<!DOCTYPE html> <html> <body> <?php
$purSr = "       15555555,     9999999,    
   998855554 , 15555555   ";

// Ignore distance
$purSrWithoutSpace = preg_replace("/\s+/", '', $purSr);
// Numbers only and ,
$purSrArrNum = preg_match("/^[0-9,]+$/", $purSrWithoutSpace);

// Convert To Array
$purSrArr = explode(",", $purSrWithoutSpace);

$purSrArrUnique = array_unique($purSrArr);
$purSrArrUnique = array_values($purSrArrUnique); // Maintain original keys

echo "<br>";
// add in db json 
$purSrJson = json_encode($purSrArrUnique, JSON_FORCE_OBJECT);

print_r($purSrJson);
echo "<br>";

/////////////////////////////////////////////////////

$saleSr = "       25896655,     25896655,    
   789645669 , 15555555   ";

// Ignore distance
$saleSrWithoutSpace = preg_replace('/\s+/', '', $saleSr);
// Numbers only and ,
$saleSrArrNum = preg_match("/^[0-9,]+$/", $saleSrWithoutSpace);

// Convert To Array
$saleSrArr = explode(",", $saleSrWithoutSpace);

$saleSrArrUnique = array_unique($saleSrArr);
$saleSrArrUnique = array_values($saleSrArrUnique); // Maintain original keys

echo "<br>";
// add in db json 
$saleSrJson = json_encode($saleSrArrUnique, JSON_FORCE_OBJECT);

print_r($saleSrJson);
 ?>
 </body> 
</html> 