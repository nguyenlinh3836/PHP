<?php
class Greeting{
    private $world="hello";
}
$closure = function ($whom){
    echo "$this -> world $whom \n";
};
$ojb = new Greeting();
$closure -> call($ojb,'john');
$closure -> call($ojb,'kevin');

?>