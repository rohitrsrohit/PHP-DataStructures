<?php
include 'Node.php';
class LinkedList
{
    public $head;
    /**
     * inserting data at the end.
     */
    public function insert($data)
    {
        $newNode = new Node();
        $newNode -> data = $data;
        $newNode -> next = null;
        if($this -> head == null)
        {
            $this -> head = $newNode;
        }
        else
        {
            $tempNode = new Node();
            $tempNode = $this -> head;
            while($tempNode -> next != null)
            {
                $tempNode = $tempNode -> next;
            }
            $tempNode -> next = $newNode;
        }
    }

    /**
     * inserting data at the start of the linked list.
     * 
     */
    public function insertAtStart($data)
    {
        $newNode = new Node();
        $newNode -> data = $data;
        $newNode -> next = null;
        $newNode -> next = $this -> head;
        $this -> head = $newNode;
    }

    /**
     * inserting data at the specified position in the linked list.
     */
    public function insertAt($index,$data)
    {
        $newNode = new Node();
        $newNode -> data = $data;
        $newNode -> next = null;
        
        if($index == 0)
        {
            self :: insertAtStart($data);
        }
        else
        {
            $tempNode = new Node();
            $tempNode = $this -> head;
            for($i = 0; $i < $index; $i++)
            {
                $tempNode = $tempNode -> next;
            }
            $newNode -> next = $tempNode -> next;
            $tempNode -> next = $newNode;
        }
    }
    
    /**
     * deleting the node at first of the linked list
     */
    public function deleteAtFirst()
    {
        if($this -> head != null)
        {
            $temp = $this -> head;
            $this -> head = $this -> head -> next;
            $temp = null;
        }
    }


    /**
     * deleting the node at end of the linked list
     */
    public function deleteFromEnd()
    {
        $tempNode = new Node();
        $prevNode  = new Node();
        $tempNode = $this -> head;
        while($tempNode -> next != null)
        {
            $prevNode = $tempNode;
            $tempNode = $tempNode -> next;
        }
        $prevNode -> next = null;
    }


    /**
     * deleting node at the specified position in the linked list.
     */
    public function deleteFromPos($position)
    {
        $tempNode = new Node();
        $nextNode = new Node();
        $tempNode = $this -> head;
        for($i = 0; $i < $position - 1; $i++)
        {
            $tempNode = $tempNode -> next;
        }
        $nextNode = $tempNode -> next;
        $tempNode -> next = $nextNode -> next;
    }

    /**
     * printing the list after all operations has been done.
     */
    public function printList()
    {
        $tempNode = new Node();
        $tempNode = $this -> head;
        echo "\nThe List elements are : \n";
        while($tempNode != null)
        {
            echo $tempNode -> data." ";
            $tempNode = $tempNode -> next;
        }
    }
}
?>