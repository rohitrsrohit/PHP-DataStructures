<?php
/**
 * function taking two args:
 * one is the array and
 * the data by using it implementing binary search
 */
function binarySearch($myArray,$data)
{
    $lowerIndex = 0;
    $higherIndex = count($myArray) - 1;
    while($lowerIndex <= $higherIndex)
    {
        #calculating mid value
        $midIndex = intval(($lowerIndex+$higherIndex)/2);
        if($data == $myArray[$midIndex])
        {
            return $midIndex;
        }
        else if($data < $myArray[$midIndex])
        {
            $higherIndex = $midIndex - 1;
        }
        else
        {
            $lowerIndex = $midIndex + 1;
        }
    }
    return -1;
}

$myArray = array(10,20,30,40,50);
print_r($myArray);
$data = readline("Enter the Element you want to search for :");

//passing the array and the element to be searched
$index = binarySearch($myArray,$data);

if($index == -1)
echo "Element is not found";
else
echo "Search Element is found at index : " .$index;
?>