<?php

namespace App\Http\Controllers;

use App\Models\Dbinfo;
use Illuminate\Http\Request;

class MysqlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dbid = $request->id;
        $dbs = Dbinfo::find($dbid);
        return view('backups', ['dbs' => $dbs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd($request);
    }
}
