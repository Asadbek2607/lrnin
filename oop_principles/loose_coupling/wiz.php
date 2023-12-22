<?php

// Computer class doesn't care about the type of keyboard. Because abstract class was given. Now we can add any keyboard type which extends 'Keyboard' abstract class
 
class Computer{
    public Keyboard $keyboard;
}

abstract class Keyboard{
    abstract function type();
}

class RazorKeyboard extends Keyboard{
    public function type(){
        return 'typing in razor...';
    }
}

class LogitechKeyboard extends Keyboard{
    public function type(){
        return 'typing in logi ...';
    }
}


// we can easily change type of keyboard in 'RUN TIME (below)': $comp->keyboard = new RazorKeyboard();
$comp = new Computer();
$comp->keyboard = new LogitechKeyboard();
echo $comp->keyboard->type();



