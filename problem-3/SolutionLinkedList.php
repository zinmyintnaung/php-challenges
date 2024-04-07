<?php

class Node {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class LinkedList {
    public $head;
    function __construct($head=null){
        $this->head = null;
    }

    public static function pushBackList($arr){
        $myList = new LinkedList();

        if(sizeof($arr)>0){
            foreach($arr as $item){
                $currentNode = new Node($item);
                if($myList->head == null){
                    $myList->head = $currentNode;
                }else{
                    $temp = new Node();
                    $temp = $myList->head;
                    while($temp->next != null){
                        $temp = $temp->next;
                    }
                    $temp->next = $currentNode;
                }
            }
        }
        return $myList;
    }

}

print_r(LinkedList::pushBackList([1,2,3]));

// LinkedList insertion, the next node must be the next node of the node before it, $myFirstNode->next = $mySecondNode;
// $myList = new LinkedList();
// $myFirstNode = new Node();
// $myFirstNode->val = 3;
// $myFirstNode->next = null;
// $myList->head = $myFirstNode;

// $mySecondNode = new Node();
// $mySecondNode->val = 5;
// $mySecondNode->next = null;
// $myFirstNode->next = $mySecondNode;

