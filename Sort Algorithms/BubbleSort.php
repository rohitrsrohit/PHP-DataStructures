<?php
/**
 * function taking the array input and sorting the elements
 */
function bubbleSort($myArray)
{
    for ($index=0; $index < count($myArray); $index++) 
    { 
        for ($adjacent = $index+1; $adjacent < count($myArray)  ; $adjacent++) 
        { 
            if($myArray[$index] > $myArray[$adjacent])
            {
                $temp = $myArray[$index];
                $myArray[$index] = $myArray[$adjacent];
                $myArray[$adjacent] = $temp;
            }
        }
    }
    return $myArray;
}
/**
 * printing the sorted array
 */
function printArray($myArray)
{
    $sortedArray = bubbleSort($myArray);
    echo "The Sorted Elements are :\n";
    foreach($sortedArray as $value)
    {
        echo "$value\n";
    }
}
 $myArray = array(22,11,99,19,30);
 printArray($myArray);
?>