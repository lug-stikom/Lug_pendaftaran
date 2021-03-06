<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use DB;
use DateTime;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = DB::table('members')->paginate(10);
        $total_member = DB::table('members')->count();

          return view('member.index', compact('members','total_member'));

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
        //dd($request->all());

        $validator = Validator::make($request->all(), [
          'Nim' => 'required|unique:members,Nim',
          'Nama' => 'required',
          'Tlp' => 'required',

        ]);

        if ($validator->fails()) {
          return
          redirect()->route('member.index')->withErrors($validator)->withInput();
        }
        DB::table('members')->insert(
        //rewuest berdasarkan name
          ['Nim' => $request->Nim,
          'Nama' => $request->Nama,
          'Tlp' =>$request->Tlp,
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),

        ]);
        return redirect()->route('member.index')->with('pesan_sukses','simpan sukses !');
        //echo 'Sukses simpan!';

    }

    public function daftar(Request $request)
    {
      $id = DB::table('members')->insertGetId([
        'Nim' => $request->nim,
        'Nama' => $request->name,
        'Tlp' =>$request->phone,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),

      ]);

      return response()->json(['status' => 'ok', 'inserted_id' => $id, 'data' => $request->all()]);
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
        $member2 = DB::table('members')->find($id);

        return view('member.show',compact('member2'));

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
        DB::table('members')->where('id', $id)->delete();
        return redirect()->route('member.index')->with('pesan_sukses','Hapus sukses !');

    }
}
