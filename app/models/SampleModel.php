<?php

namespace App\Models;

use AegisFang\Database\Model;
use AegisFang\Database\Query;

class SampleModel extends Model
{
    protected array $item;

    public function __construct(Query $query)
    {
        parent::__construct($query);

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
