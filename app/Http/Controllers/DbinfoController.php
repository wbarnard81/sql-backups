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
        $dbs = Dbinfo::all();
        return view('Dbinfo.index', ['dbs'=> $dbs]);
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
        $request->validate([
            'db_name' => 'required|min:6',
            'db_host' => 'required|ipv4',
            'db_username' => 'required|min:6',
            'db_password' => 'required|min:6',
            'db_port' => 'required|min:4|max:5',
            'db_cluster' => 'required',
        ]);
        
        Dbinfo::create($request->all());

        return redirect()->back()->with([
            'message' => 'DB Info added successfully!', 
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
