<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{
    public function read()
    {

        // phpinfo();
        // exit;

        return view ('welcome', ['items'=> item::all()]);
    }
}