<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastControler extends Controller
{
    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $resquest)
    {
        $resquest->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        DB::table('cast')->insert([
            'nama' => $resquest['nama'],
            'umur' => $resquest['umur'],
            'bio' => $resquest['bio']
        ]);
        return redirect('/cast');
    }

    public function index()
    {
        $cast = DB::table('cast')->get();
        //dd($cast);

        return view('cast.index', ['cast' => $cast]);
    }

    public function show($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('cast.show', ['cast' => $cast]);
    }

   public function edit($id)
   {
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('cast.edit', ['cast' => $cast]);

   }

   public function update(Request $resquest, $id)
   {
    $resquest->validate([
        'nama' => 'required',
        'umur' => 'required',
        'bio' => 'required'
    ]);
    
    DB::table('cast')
        ->where('id', $id)
        ->update(
            [
                'nama' => $resquest->nama,
                'umur' => $resquest->umur,
                'bio' => $resquest->bio,
            ],
        );
    return redirect('/cast');
   }

   public function destroy($id)
   {
    DB::table('cast')->where('id', $id)->delete();

    return redirect('/cast');
   }
    
}
