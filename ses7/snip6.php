<?php
$anon_class_obj = new class{
    public $greeting = 'hello';
    public $Id = 45;
    const SETT = 'some configuration';
    public function getValue(){
        return 'some returned value';
    }
    public function getValueWighArg($str1){
        return 'returned value is'.$str1;
    }
};
echo '<br>';
echo $anon_class_obj->greeting;
echo '<br>';
echo $anon_class_obj->Id;
echo '<br>';
echo $anon_class_obj::SETT;
echo '<br>';
echo $anon_class_obj->getValue();
echo '<br>';
echo $anon_class_obj->getValueWighArg('Aptech');
?>
