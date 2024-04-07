<?php

class Node{
    public $val = 0;
    public $next = null;

    function __construct($val=0, $next=null){
        $this->val = $val;
        $this->next = $next;
    }
}

class LinkedList{
    public  $head;

    function __construct($head=null){
        $this->head = null;
    }

    public static function pushFrontList($arr){
        
        $myList = new LinkedList();

        if(sizeof($arr) > 0){
            foreach($arr as $item){
                if($myList->head == null){
                    $currentNode = new Node($item);
                    $myList->head = $currentNode;
                }else{
                    $temp = new Node($item, $myList->head);
                    $myList->head = $temp;
                }
            }
        }

        return $myList;
    }
}

print_r(LinkedList::pushFrontList([1,2,3]));