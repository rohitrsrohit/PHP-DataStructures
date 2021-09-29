<?php
include 'Stack.php';
class Runner
{
    /**
     * Calling required methods from main function.
     */
    public function main()
    {
        $stack = new Stack();
        $stack -> push(10);
        $stack -> push(20);
        $stack -> push(30);
        $stack -> pop();
        $stack -> peek();
        $stack -> printStack();
    }
}

//object for then Runner class
$runner = new Runner();
$runner -> main();
?>