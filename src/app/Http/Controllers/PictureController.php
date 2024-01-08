<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pic = new Picture();
        $pictures = $pic->getAll();

        return view('index', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      //
    }

    public function upload(Request $request)
    {
        $dir = 'pic';
        $input_tag_name = 'picture';

        // store picture data
        $file_name = $request->file($input_tag_name)->getClientOriginalName();
        $content_type = $request->file($input_tag_name)->getMimeType();
        $request->file($input_tag_name)->storeAs('public/' . $dir, $file_name);

        // save picture info
        $pic = new Picture();
        $pic->file_name = $file_name;
        $pic->file_path = 'storage/' . $dir . '/' . $file_name;
        $pic->content_type = $content_type;
        $pic->save();

        return redirect('/');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
