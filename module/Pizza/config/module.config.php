<?php
return array(
    'general'       => array(
        'homepage'      => 'http://www.luigis-pizza.de/',
        'base_price'    => 3.95,
        'topping_price' => 0.95,
    ),
    'pizza_list'    => array(
        'salami' => array(
            'name'     => 'Pizza Salami',
            'crust'    => 'wheat flour',
            'toppings' => array(
                'salami', 'cheese', 'tomato stodge',
            ), 
        ),
        'hawaii' => array(
            'name'     => 'Pizza Hawaii',
            'crust'    => 'wheat flour',
            'toppings' => array(
                'boiled ham', 'pineapple', 'cheese', 'tomato stodge',
            ), 
        ),
        'melon' => array(
            'name'     => 'Pizza Melone',
            'crust'    => 'spelt flour',
            'toppings' => array(
                'melon', 'boiled ham', 'salami', 'cheese', 'tomato stodge',
            ), 
        ),
    ),
);
