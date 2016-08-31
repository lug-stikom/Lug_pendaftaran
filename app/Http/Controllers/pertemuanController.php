<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use DB;
use DateTime;

class pertemuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = DB::table('members')->get();

        return view('pertemuan.index', compact('members'));

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
      $validator = Validator::make($request->all(), [
        'materi' => 'required|max:100',
        'deskripsi' => 'required|max:255',
        'ruang' => 'required|max:20',
        'diadakan' => 'required',
      ]);

      if ($validator->fails()) {
        return
        redirect()->route('pertemuan.index')->withErrors($validator)->withInput();
      }
      DB::table('pertemuan')->insert([
      //rewuest berdasarkan name
        'materi' => $request->materi,
        'deskripsi' => $request->deskripsi,
        'diadakan' => $request->diadakan,
        'ruang' =>$request->ruang,
        'pengurus_id' =>$request->pengurus_id,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),

      ]);
      return redirect()->route('pertemuan.index')->with('pesan_sukses','simpan sukses !');
      //echo 'Sukses simpan!';
      //
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
    }
}
