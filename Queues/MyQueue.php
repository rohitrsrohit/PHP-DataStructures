<?php
include 'Node.php';
class MyQueue
{
    public $front;
    public $rear;
    
    /**
     * inserting the elements in the queue.
     */
    public function enQueue($data)
    {
        $newNode = new Node();
        $newNode -> data =$data;
        $newNode -> next = null;

        if($this -> front == null && $this -> rear == null)
        {
            $this -> front = $this -> rear = $newNode;
        }
        else{
            $this -> rear -> next = $newNode;
            $this -> rear = $newNode;
        }
    }

    /**
     * deleting the element that is deQueue in the queue.
     */
    public function deQueue()
    {
        $tempNode = new Node();
        $tempNode = $this -> front;
        $this -> front = $this -> front -> next;
        echo "\ndeQueued Element is : \n".$tempNode -> data;
    }

    /**
     * printing the queue elements.
     */
    public function printQueue()
    {
        $tempNode = new Node();
        $tempNode = $this -> front;
        echo "\nThe Elements in the Queue are: \n";
        while($tempNode != null)
        {
            echo $tempNode -> data." ";
            $tempNode = $tempNode ->next;
        }
    }
}
?>