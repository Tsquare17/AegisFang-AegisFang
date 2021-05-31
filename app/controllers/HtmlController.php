<?php

namespace App\Controllers;

use AegisFang\Controller\BaseController;
use AegisFang\View\View;

class HtmlController extends BaseController
{
    public function index(): string
    {
        $header = new View('partials/header', [
            'title' => 'AegisFang',
        ]);

        $footer = new view('partials/footer');

        $content = new View('templates/example-page', [
            'header' => $header,
            'footer' => $footer,
        ]);

        return $this->dispatch($content);
    }
}
