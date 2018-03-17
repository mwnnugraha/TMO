<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumni;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.alumni.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $alumni= new alumni;
        $alumni->nama = $request->nama;
        $alumni->testimoni = $request->testimoni;

        if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $alumni->foto = $filename;
        }
 
        $alumni->save();
        
        return redirect()->route('alumni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $alumni = alumni::find($id);
        return view('backend.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $alumni = alumni::find($id);
        $alumni->update($request->all());
       
        if($request->hasFile('gambar'))
        {
            $filename=null;
            $uploaded_logo=$request->file('gambar');
            $extension=$uploaded_logo->getClientOriginalExtension();
            $filename=md5(time()).'.'.$extension;
            $destinationPath=public_path().DIRECTORY_SEPARATOR.'image';
            $uploaded_logo->move($destinationPath, $filename);
            if($alumni->gambar)
            {
                $old_logo=$alumni->gambar;
                $filepath=public_path().DIRECTORY_SEPARATOR.'image'.DIRECTORY_SEPARATOR.$alumni->gambar;
                try {
                    File::delete($filepath);
                } catch(FileNotFoundException $e) {

                }
            }
            $alumni->gambar=$filename;
            $alumni->save();
        }
        return redirect()->route('alumni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $alumni = alumni::find($id);
        $alumni->delete();
        return redirect()->route('alumni.index');
    }
}
