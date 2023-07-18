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
        $data = $request -> all();
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
}
