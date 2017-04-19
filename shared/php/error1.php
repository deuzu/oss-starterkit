<?php
error_reporting(E_ALL);

/**
 * This function return the average of all numeric values in the array or null if no numeric value was found
 *
 * @param array $collection
 * @return null|float|int
 */
function average($collection) {
    $sum  = $return = 0;
    for ($i=0; $i<=sizeof($collection); $i++)
        if ($collection[$i]) $sum += $collection[$i];
    return $sum / sizeof($collection);
}

/* Ne pas toucher la partie au dessous : */
echo "Test Average : \n";
$array = array(5,"test",1,0.5,"18.9",true,92,65,21,25,18,"toto");
echo "Construction du tableau : ";
echo var_export($array);
echo "\nRésultat = ".average($array) ."\n";
echo "\nLe bon résultat est = 27,377777778 \n";

?>
