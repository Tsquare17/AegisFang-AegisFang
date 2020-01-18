<?php

namespace App\Models;


class Model
{
    protected $item;

    public function __construct()
    {
        $this->item = [
            'status' => 'success',
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Trevor',
                ],
                [
                    'id' => 2,
                    'name' => 'Bob',
                ],
                [
                    'id' => 3,
                    'name' => 'Joe',
                ]
            ]
        ];
    }

    public function getItem()
    {
        return $this->item;
    }

    public function save($item)
    {
        return 'Fake saved ' . $item;
    }
}
