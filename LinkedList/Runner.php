<?php
include 'LinkedList.php';
class Runner
{
    /**
     * Calling required methods from main function.
     */
    public function main()
    {
        $linkedList = new LinkedList();
        $linkedList -> insert(10);
        $linkedList -> insert(5);
        $linkedList -> insertAtstart(0);
        $linkedList -> insertAt(0,9);
        $linkedList -> deleteAtFirst();
        $linkedList -> deleteFromEnd();
        $linkedList -> deleteFromPos(2);
        $linkedList -> printList();
    }
}

//object for then Runner class
$runner = new Runner();
$runner -> main();
?>