<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TintucModel;
use DateTime;

class TintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        return view('index');
    }
    public function list()
    {
        $data = TintucModel:: select()->get()->toArray();
        return view('list',['tintuc' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tintuc = new TintucModel;
        $tintuc->tieude =  $request->txtTitle;
        $tintuc->tacgia =  $request->txtAuthor;
        $tintuc->trichdan =  $request->txtIntro;
        $tintuc->noidung =  $request->txtFull;
        $tintuc->status =  $request->rdoPublic;
        $tintuc->created_at =  new DateTime();
        $tintuc->id_danhmuc =  $request->sltCate;
        $tintuc->save();
        return redirect()->route('list');
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
        $data = TintucModel:: find($id)->toArray();
        return view('edit',['data' =>$data]);
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
        $tintuc = TintucModel::find($id);
        $tintuc->tieude =  $request->txtTitle;
        $tintuc->tacgia =  $request->txtAuthor;
        $tintuc->trichdan =  $request->txtIntro;
        $tintuc->noidung =  $request->txtFull;
        $tintuc->status =  $request->rdoPublic;
        $tintuc->created_at =  new DateTime();
        $tintuc->id_danhmuc =  $request->sltCate;
        $tintuc->save();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tintuc = TintucModel::find($id);
        $tintuc->delete();
        return redirect()->route('list');
    }
}
