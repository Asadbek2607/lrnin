<?php

class Coffee{

    public $spoon;

    public function boilWater()
    {
        echo 'boiling...';
    }

    public function addSugar()
    {
        echo 'adding sugar...';
    }

    public function addMilk()
    {
        echo 'adding milk...';
    }
}


class CoffeeWithMilk extends Coffee{

    public function addMoreSugar()
    {
        echo 'adding sugar again';
    }

}

class CoffeeWithoutSugar extends Coffee{

    public function addSugar()
    {
        return '';
    }

}


// here we have to create separate class for every type of coffee and its related to base class (parent class).
// It's a drawback of inheritance because if we don't need any method from parent class, we have to override it.   

// in $coffee1 object below has all methods from parent class, which is not need for this object. And it will send NULL to all properties .
$coffee1 = new CoffeeWithMilk();
var_dump($coffee1->addMilk());

$coffeeWithoutSugar = new CoffeeWithoutSugar();
var_dump($coffeeWithoutSugar);
