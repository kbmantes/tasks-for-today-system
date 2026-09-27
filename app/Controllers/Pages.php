<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        $data = [
            'title' => 'About'
        ];

        return view('templates/header', $data)
            . view('pages/about')
            . view('templates/footer');
    }
}