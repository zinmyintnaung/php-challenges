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

    public static function createLinkedList($arr){
        $myList = new LinkedList();
        if(sizeof($arr) > 0){
           
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

    public static function createArrayFromList($list){
        $arr = [];
        $temp = $list->head;
        if($temp->next == null){
            $arr[] = $temp->val;
            return $arr;
        }
        while($temp->next != null){
            array_push($arr, $temp->val);
            $temp = $temp->next;
        }
        array_push($arr, $temp->val);
        return $arr;
    }
}

$myFirstList = LinkedList::createLinkedList([1,0,1]);
print_r($myFirstList);
echo '<br/>';

$mySecondList = LinkedList::createLinkedList([7,1,1]);
print_r($mySecondList);
echo '<hr/>';

$myFirstArray = LinkedList::createArrayFromList($myFirstList);
print_r($myFirstArray);
echo '<br/>';
$mySecondArray = LinkedList::createArrayFromList($mySecondList);
print_r($mySecondArray);
echo '<hr/>';

$intArr1 = (int)implode("", array_reverse($myFirstArray));
$intArr2 = (int)implode("", array_reverse($mySecondArray));
$resultArray = array_reverse(str_split($intArr1 + $intArr2));
print_r($resultArray);
echo '<hr/>';

echo 'The return linked list should be:';
echo '<br/>';
$returnLinkedList = LinkedList::createLinkedList($resultArray);
print_r($returnLinkedList);
echo '<hr/>';