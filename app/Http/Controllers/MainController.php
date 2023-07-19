<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class MainController extends Controller
{
    public function index(){
        $comics = Comic :: all();
        return view('comic.index', compact('comics'));
    }

    public function show($id){
        $comic = Comic :: FindOrFail($id);
        return view('comic.show', compact('comic'));
    }

    public function create(){

        return view('comic.create');
    }

    public function store(Request $request){
        $data = $request -> validate([
            'title' => 'required|min:4|max:128',
            'description' => 'required|min:4|max:400',
            'thumb' => 'required|min:200',
            'price' => 'required|integer|numeric',
            'series' => 'required|min:4|max:128',
            'sale_date' => 'required|date',
            'type' => 'required|min:4|max:64'
        ]);
        $comic = Comic :: create($data);

        return redirect()-> route("comic.index");

    }

    public function edit($id){
        $comic = Comic :: FindOrFail($id);
        return view('comic.edit', compact('comic'));
    }

    public function update(Request $request, $id){
        $data = $request -> all();
        $comic = Comic :: FindOrFail($id);
        $comic -> update($data);

        return redirect()-> route("comic.index");
    }

    public function destroy($id){
        $comic = Comic :: FindOrFail($id);
        $comic -> delete();
        return redirect()-> route("comic.index");
    }
}
