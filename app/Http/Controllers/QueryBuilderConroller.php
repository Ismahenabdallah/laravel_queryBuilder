<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $queryBuilder = DB::table('querybuilder')->get();

        return view('QueryBuilder.index', compact('queryBuilder'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    /*** http://127.0.0.1:8000/querybuilder/create */
        return view('QueryBuilder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required ',
        ]);
        DB::table('querybuilder')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        // return response('insert ');
        return redirect()->route('routequerybuilder.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $e = DB::table('querybuilder')->where('id', $id)->first();

        return view('QueryBuilder.edit', compact('e'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required ',
        ]);
       DB::table('querybuilder')->where('id', $id)->update([
           'title' => $request->title,
           'body' => $request->body,
       ]);

        return redirect()->route('routequerybuilder.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('querybuilder')->where('id', $id)->delete();
        return redirect()->route('routequerybuilder.index');
    }
    public function deleteAll()
    {
        DB::table('querybuilder')->delete();
        return redirect()->route('routequerybuilder.index');
    }


    public function deleteTruncate (){
        DB::table('querybuilder')->truncate();
        return redirect()->route('routequerybuilder.index');
    }
}
