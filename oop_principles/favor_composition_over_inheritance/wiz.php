<?php

class Coffee{
    public $cost = 1000;
    public $ingredients = [];

    public function addIngredient(Ingredient $ingredient)
    {
        $this->cost += $ingredient->cost();
        $this->ingredients[] = $ingredient->name();
    }

    public function pourCoffee()
    {
        echo 'pouring coffee';
    }
}

interface Ingredient
{
    public function cost();
    public function name();
}

class Milk implements Ingredient{
    public function cost()
    {
        return 300;
    }

    public function name()
    {
        return 'Milk';
    }
}

class Sugar implements Ingredient{
    public function cost()
    {
        return 200;
    }

    public function name()
    {
        return 'Sugar';
    }
}

class ColdWater implements Ingredient{
    public function cost()
    {
        return 50;
    }

    public function name()
    {
        return 'Cold Water';
    }
}

// now, we can choose what should need to be added our coffee easily, and it can show us its cost and added ingredients.
$newCoffee = new Coffee();
$newCoffee->addIngredient(new Milk());
$newCoffee->addIngredient(new Sugar());
$newCoffee->addIngredient(new ColdWater());

print_r($newCoffee->ingredients);















