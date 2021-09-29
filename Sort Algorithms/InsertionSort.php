<?php
/**
 * sorting the elements using insertion sort.
 */
function insertionSort($myArray)
{
    for($index =1; $index < count($myArray); $index++)
    {
        $temp = $myArray[$index];
        $j = $index - 1;
        while($j >= 0 && $myArray[$j] > $temp)
        {
            $myArray[$j+1] = $myArray[$j];
            $j--;
        }
        $myArray[$j+1] = $temp;
    }

    echo "The Sorted Elements are:\n";
    
    //printing the array values using for each.
    foreach($myArray as $value)
    {
        echo $value." "; 
    }
}

$myArray = array(20,11,99,12,34);
insertionSort($myArray);
?>