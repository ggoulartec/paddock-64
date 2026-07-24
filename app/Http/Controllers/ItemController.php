<?php

namespace App\Http\Controllers;

class ItemController extends Controller
{
    public function show(string $id)
    {
        $item = collect(config('paddock.catalog'))->firstWhere('id', $id);
        abort_if(! $item, 404);

        $seller = config('paddock.seller');

        return view('item.show', compact('item', 'seller'));
    }
}
