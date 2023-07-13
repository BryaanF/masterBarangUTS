<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Models\Unit;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Item List';
        $items = Item::all();
        return view('item.index', compact('pageTitle', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Item';
        $units = Unit::all();
        return view('item.input', compact('pageTitle', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
        'required' => 'Attribute harus diisi.',
        'numeric' => 'Attribute harus diisi dengan angka'
        ];
        $validator = Validator::make($request->all(), [
        'name' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
        ], $messages);
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $item = New Item;
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->unit_id = $request->unit;
        $item->save();
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Item List';
        $items = Item::find($id);
        $units = Unit::all();
        return view('item.renew', compact('pageTitle', 'items', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi.',
            'numeric' => 'Attribute harus diisi dengan angka'
            ];
            $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            ], $messages);
            if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            }
            // ELOQUENT
            $item = Item::find($id);
            $item->name = $request->name;
            $item->price = $request->price;
            $item->description = $request->description;
            $item->unit_id = $request->unit;
            $item->save();
            return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::find($id)->delete();
        return redirect()->route('item.index');
    }
}
