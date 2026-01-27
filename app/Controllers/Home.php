<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function panduan(): string
    {
        return view('panduan');
    }

    public function template(): string
    {
        return view('template');
    }
}
