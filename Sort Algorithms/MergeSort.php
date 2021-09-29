<?php
/**
 * function for merge sort - splits the array and
 *  call merge function to sort and merge.
 */
function mergesort(&$myArray, $left, $right) {
  if ($left < $right) { 
    $mid = $left + (int)(($right - $left)/2);
    mergesort($myArray, $left, $mid);
    mergesort($myArray, $mid+1, $right);
    merge($myArray, $left, $mid, $right);
  }
}

/**
 *merge function performs sort and merge operations.
*/
function merge(&$myArray, $left, $mid, $right) {
  // Create two temporary array to hold split 
  // elements of main array 
  $n1 = $mid - $left + 1; //no of elements in LeftArray
  $n2 = $right - $mid;     //no of elements in RightArray    
  $leftArray = array_fill(0, $n1, 0); 
  $rightArray = array_fill(0, $n2, 0);
  for($i=0; $i < $n1; $i++) { 
    $leftArray[$i] = $myArray[$left + $i];
  }
  for($i=0; $i < $n2; $i++) { 
    $rightArray[$i] = $myArray[$mid + $i + 1];
  }

  // In below section x, y and z represents index number
  // of LeftArray, RightArray and Array respectively
  $x=0; $y=0; $z=$left;
  while($x < $n1 && $y < $n2) {
    if($leftArray[$x] < $rightArray[$y]) { 
      $myArray[$z] = $leftArray[$x]; 
      $x++; 
    }
    else { 
      $myArray[$z] = $rightArray[$y];  
      $y++; 
    }
    $z++;
  }

  // Copying the remaining elements of LeftArray
  while($x < $n1) { 
     $myArray[$z] = $leftArray[$x];  
     $x++;  
     $z++;
  }

  // Copying the remaining elements of RightArray
  while($y < $n2) { 
    $myArray[$z] = $rightArray[$y]; 
    $y++;  
    $z++; 
  }
}

// function to print array
function printArray($myArray, $n) { 
  for ($i = 0; $i < $n; $i++) 
    echo $myArray[$i]." "; 
  echo "\n";
} 

// test the code
$myArray = array(10, 1, 23, 50, 4, 9, -4);
$n = sizeof($myArray); 
echo "Original Array\n";
PrintArray($myArray, $n);

mergesort($myArray, 0, $n-1);
echo "\nSorted Array\n";
PrintArray($myArray, $n);
?>