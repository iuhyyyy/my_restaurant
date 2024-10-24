<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Http\Requests\StoremenuRequest;
use App\Http\Requests\UpdatemenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu =menu::all();
        return $menu;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremenuRequest $request)
    {
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->category_id = $request->catergory_id;
        $menu->offers = $request->offers;

        $menu->save();
        return $menu;
    }

    /**
     * Display the specified resource.
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemenuRequest $request, menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(menu $menu)
    {
        //
    }
}
