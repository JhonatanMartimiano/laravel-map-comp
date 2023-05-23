<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompetenceController extends Controller
{
    public function index()
    {
        $competences = Competence::all();
        return view("themes.admin.competences.index", ['competences' => $competences]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::all();
        return view("themes.admin.competences.create", ['sectors' => $sectors]);
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
            'sector_id.required' => 'O setor é obrigatório.'
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'sector_id' => 'required'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $competence = new Competence();
        $competence->title = $request->input('title');
        $competence->sector_id = $request->input('sector_id');

        if (!$competence->save()) {
            return response()->json(['errors' => 'Erro ao cadastrar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Competência cadastrada com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.competences.home')]);
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
    public function edit(Competence $competence)
    {
        $sectors = Sector::all();
        return view('themes.admin.competences.edit', ['competence' => $competence, 'sectors' => $sectors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competence $competence)
    {
        $customMessages = [
            'title.required' => 'O título é obrigatório.',
            'sector_id.required' => 'O setor é obrigatório.'
        ];

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'sector_id' => 'required'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $competence->title = $request->input('title');

        if (!$competence->save()) {
            return response()->json(['errors' => 'Erro ao atualizar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Competência atualizada com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.competences.home')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $competence = Competence::find($id);
        $competence->delete();

        session()->flash('message', (object)[
            'message' => 'A competência foi excluído com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.competences.home')]);
    }
}
