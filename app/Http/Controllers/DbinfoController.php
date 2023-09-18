<?php

namespace App\Http\Controllers;

use App\Models\Dbinfo;
use Illuminate\Http\Request;

class DbinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dbinfo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dbinfo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->input('grid-db-name'));
        $request->validate([
            'grid-db-name' => 'required|min:6',
            'grid-db-host' => 'required',
            'grid-db-username' => 'required|min:6',
            'grid-db-password' => 'required|min:6',
            'grid-db-port' => 'required|min:4',
            'grid-db-cluster' => 'required',
        ]);

        $user = new Dbinfo;
        $user->name = $request->input('name');
        $user->email = trim($request->input('email'));
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->back()->with([
            'message' => 'User added successfully!', 
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dbinfo $dbinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dbinfo $dbinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dbinfo $dbinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dbinfo $dbinfo)
    {
        //
    }
}
