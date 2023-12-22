<?php

// here, Computer class really cares about the type of keyboard. Because exact keyboard type is given instead of abstract class.
// if we want add new type, we have to change our Computer class. it's not best practice! 
class Computer{
    public RazorKeyboard $keyboard;
}

class RazorKeyboard{
    public function type(){
        return 'typing in razor...';
    }
}

class LogitechKeyboard{
    public function type(){
        return 'typing in logi ...';
    }
}


$comp = new Computer();
$comp->keyboard = new RazorKeyboard();
echo $comp->keyboard->type();



