<?php

use Fuel\Core\Controller_Rest;

class Controller_Api_V1_Foods extends Controller_Rest
{
    public function get_list()
    {
        return $this->response([
            ['name' => 'apple', 'price' => 200],
            ['name' => 'cookie', 'price' => 300],
            ['name' => 'lemon', 'price' => 100],
        ]);
    }
}