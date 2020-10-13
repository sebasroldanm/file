<?php

namespace App\Http\Controllers;

use App\file;
use Illuminate\Http\Request;
use GrahamCampbell\Flysystem\Facades\Flysystem;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $file = Flysystem::read('bg.jpg');

        return view('file.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        // Flysystem::connection('sftp1')->put($name, 'sftp');
        // Flysystem::connection('sftp2')->put($name, 'sftp');
        Flysystem::connection('sftp1')->put('storage/app/public/avatar/' . $name, 'sftp');
        Flysystem::connection('sftp2')->put('storage/app/public/avatar/' . $name, $name);

        // Storage::disk('sftp1')->put('avatars/1', $request->file('file'));


        // $archivo = $request->imagen->storeAs('beneficios', $img, 'public');


        return view('file.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function show(file $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(file $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, file $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\file  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(file $file)
    {
        //
    }
}
