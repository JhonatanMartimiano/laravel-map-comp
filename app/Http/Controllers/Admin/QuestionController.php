<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view("themes.admin.questions.index", ['questions' => $questions]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competences = Competence::all();
        return view("themes.admin.questions.create", ['competences' => $competences]);
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
            'question.required' => 'A questão é obrigatória.',
            'competence_id.required' => 'A competência é obrigatória.'
        ];

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'competence_id' => 'required'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $question = new Question();
        $question->question = $request->input('question');
        $question->competence_id = $request->input('competence_id');

        if (!$question->save()) {
            return response()->json(['errors' => 'Erro ao cadastrar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Questão cadastrada com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.questions.home')]);
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
    public function edit(Question $question)
    {
        $competences = Competence::all();
        return view('themes.admin.questions.edit', ['question' => $question, 'competences' => $competences]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $customMessages = [
            'question.required' => 'A questão é obrigatória.',
            'competence_id.required' => 'A competência é obrigatória.'
        ];

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'competence_id' => 'required'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $question->question = $request->input('question');

        if (!$question->save()) {
            return response()->json(['errors' => 'Erro ao atualizar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Questão atualizada com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.questions.home')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();

        session()->flash('message', (object)[
            'message' => 'A competência foi excluído com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.questions.home')]);
    }
}
