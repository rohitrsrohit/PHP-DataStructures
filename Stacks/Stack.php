<?php
include 'Node.php';
class Stack
{
    public $top;

    /**
     * pushing data into the stack (LIFO) Format
     */
    public function push($data)
    {
        $newNode = new Node;
        $newNode -> data = $data;
        $newNode -> next = $this -> top;
        $this -> top = $newNode;
    }

    /**
     * popping data into the stack,follows LIFO format.
     */
    public function pop()
    {
        if($this -> top == null)
        {
            echo "Stack is Empty";
        }
        else
        {
            $tempNode = new Node();
            $tempNode = $this -> top;
            $this -> top = $this -> top -> next;
            echo "Popped Element is : \n".$tempNode -> data;
        }
    }

    /**
     * peeking the top most element.
     */
    public function peek()
    {
        if($this -> top == null)
        {
            echo "Stack is Empty";
        }
        else
        {
            echo "\nThe top most Element is : \n".$this -> top -> data;
        }
    }

    /**
     * printing the elements in the stack.
     */
    public function printStack()
    {
        $tempNode = new Node();
        $tempNode = $this -> top;
        echo "\nThe elements in the stack are: \n";
        while($tempNode != null)
        {
            echo  $tempNode -> data." " ;
            $tempNode = $tempNode -> next;
        }
    }
}
?>