<?php

namespace App\Http\Controllers;

use App\Pemilik;
use App\Role;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;


use Illuminate\Http\Request;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemilik=User::all();
        return view('backend.pemilik.index', compact('pemilik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('backend.pemilik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users'
        ]);
        $data = $request->all();
        $memberRole = Role::find($request->role);
        $data['password']=bcrypt($request->password);

        $member = User::create($data);
        $member->roles()->attach($request->role);

        return redirect()->route('pemilik.index');
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
        $pemilik = User::find($id);
        return view('backend.pemilik.edit', compact('pemilik'));
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
         $pemilik = User::find($id);
         $pemilik->update($request->all());
         $pemilik->save();
        
        return redirect()->route('pemilik.index');
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
        $pemilik = User::find($id);
        $pemilik->delete();
        return redirect()->route('pemilik.index');
    }
}
