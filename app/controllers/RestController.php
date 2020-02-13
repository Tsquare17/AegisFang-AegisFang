<?php

namespace App\Controllers;

use AegisFang\Router\JsonController;
use App\Models\Model;

/**
 * Class RestController
 */
class RestController extends JsonController
{
    public function index(): void
    {
        $this->send(
            [
                'index'
            ]
        );
    }

    public function get($id, $name, Model $model): void
    {
        $this->send(
            [
                $id => $name,
                $model->getItem()
            ]
        );
    }

    public function post(): void
    {
        $this->send(
            [
                'post'
            ]
        );
    }

    public function put(): void
    {
        $this->send(
            [
                'put'
            ]
        );
    }

    public function delete(): void
    {
        $this->send(
            [
                'delete'
            ]
        );
    }

    public function options(): void
    {
        $this->send(
            [
                'options'
            ]
        );
    }
}
