<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::all();
        return view("themes.admin.sectors.index", ['sectors' => $sectors]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("themes.admin.sectors.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customMessages = [
            'title.required' => 'O título é obrigatório.',
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $sector = new Sector();
        $sector->title = $request->input('title');

        if (!$sector->save()) {
            return response()->json(['errors' => 'Erro ao cadastrar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Setor cadastrado com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.sectors.home')]);
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
    public function edit(Sector $sector)
    {
        return view('themes.admin.sectors.edit', ['sector' => $sector]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sector $sector)
    {
        $customMessages = [
            'title.required' => 'O título é obrigatório.'
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $sector->title = $request->input('title');

        if (!$sector->save()) {
            return response()->json(['errors' => 'Erro ao atualizar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Setor atualizado com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.sectors.home')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sector = Sector::find($id);
        $sector->delete();

        session()->flash('message', (object)[
            'message' => 'O setor foi excluído com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.sectors.home')]);
    }
}
