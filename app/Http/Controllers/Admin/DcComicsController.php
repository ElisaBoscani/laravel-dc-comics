<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DcComics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreComicRequest;

class DcComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.comics.index', ['comics' => DcComics::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        $data = $request->validated();
        /* $file_path = null; */
        if ($request->has('thumb')) {
            $file_path =  Storage::put('comic_images', $request->thumb);
            $data['thumb'] = $file_path;
        }

        /*   $comics = new DcComics();
        $comics->title = $request->title;
        $comics->thumb = $file_path;
        $comics->save(); */
        $comics = DcComics::create($data);
        return to_route('comics.index')->with('message', 'The data addition  was successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComics $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DcComics $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, DcComics $comic)
    {

        $data = $request->validated();


        if ($request->hasFile('thumb')) {

            Storage::delete($comic->thumb);
            $path = Storage::put('comic_images', $request->file('thumb'));
            $data['thumb'] = $path;
        }

        $comic->update($data);
        return to_route('comics.index', $comic)->with('message', 'The change was successful');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DcComics $comic)
    {
        if (!is_null($comic->comic_images)) {
            Storage::delete($comic->comic_images);
        }
        $comic->delete();
        return to_route('comics.index')->with('message', 'The deletion was successful');
    }
}
