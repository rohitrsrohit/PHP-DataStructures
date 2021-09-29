<?php
include 'MyQueue.php';
class Runner
{
    /**
     * Calling required methods from main function.
     */
    public function main()
    {
        $myQueue = new MyQueue();
        $myQueue -> enQueue(10);
        $myQueue -> enQueue(20);
        $myQueue -> enQueue(30);
        $myQueue -> printQueue();
        $myQueue -> deQueue();
        $myQueue -> printQueue();
    }
}
$runner = new Runner();
$runner -> main();

?>