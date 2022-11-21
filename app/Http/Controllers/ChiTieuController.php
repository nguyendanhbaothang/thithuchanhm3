<?php

namespace App\Http\Controllers;

use App\Models\ChiTieu;
use Illuminate\Http\Request;

class ChiTieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitieu = ChiTieu::all();

        return view('index',compact('chitieu'));
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

        $validated = $request->validate([
            'danhmuc' => 'required',
            'ngay' => 'required',
            'price' => 'required|min:4',
            'note' => 'required'
        ],
            [
                'danhmuc.required'=>'Không được để trống',
                'ngay.required'=>'Không được để trống',
                'price.required'=>'Không được để trống',
                'price.min'=>'Lớn hơn :min',
                'note.required'=>'Không được để trống'

            ]
    );
        $chitieu = new ChiTieu();
        $chitieu->danhmuc = $request->danhmuc;
        $chitieu->ngay  = $request->ngay ;
        $chitieu->price  = $request->price ;
        $chitieu->note  = $request->note ;

        $chitieu->save();

        return redirect()->route('chitieu.index');

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
        $chitieu = ChiTieu::find($id);
        return view('edit', compact('chitieu'));
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
        $validated = $request->validate([
            'price' => 'min:4'
        ],
            [
                'price.min'=>'Lớn hơn :min'

            ]
    );

        $chitieu = ChiTieu::find($id);
        $chitieu->danhmuc = $request->danhmuc;
        $chitieu->ngay  = $request->ngay ;
        $chitieu->price  = $request->price ;
        $chitieu->note  = $request->note ;

        $chitieu->save();

        return redirect()->route('chitieu.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ChiTieu::find($id)->delete();
        return redirect()->route('chitieu.index');
    }
}
