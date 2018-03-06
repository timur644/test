<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class ItemController extends Controller
{
    //see  all item's
    public function read()
    {
        $items = Item::all();
        return view('items', ['items'=>$items]);
    }

    //form add item
    public function add()
    {
        return view('add-item');
    }

    //create-item
    public function create(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->save();
        return redirect('/items');
    }

    //edit-update
    public function edit(Request $request)
    {
      $items= Item::where('id', $request->id)->get();  
      return view ('edit-item', ['items'=>$items]);
    }
  
    //save-update
    public function update(Request $request)
    {
        $items = Item::where('id', $request->id)->get();
        $items[0]->name=$request->name;
        $items[0]->save();
        return redirect('/items');
    }

     /*
     drop table items;
    go

    create table items(id int identity, name nvarchar(255));
    go

    insert into items(name) values('bread');
    insert into items(name) values('water');
    insert into items(name) values('sugar');
    go

    select * from items;
    go
     */
    
}