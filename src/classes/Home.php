<?php

class Home
{
    public function index()
    {
        global $smarty;

        $games = [
            1 => 'Game 1',
            2 => 'Game 2',
            3 => 'Game 3',
        ];

        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'stock' => 10,
                'min_order' => 1,
                'max_order' => 5,
                'price' => 100
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'stock' => 20,
                'min_order' => 1,
                'max_order' => 5,
                'price' => 200
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'stock' => 30,
                'min_order' => 1,
                'max_order' => 5,
                'price' => 300
            ],
        ];

        $smarty->assign('games', $games);
        $smarty->assign('products', $products);

        $smarty->assign('template', 'home.html');
    }
}
