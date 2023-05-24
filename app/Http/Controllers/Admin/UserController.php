<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("themes.admin.users.index", ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::all();
        return view("themes.admin.users.create", ['sectors' => $sectors]);
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
            'first_name.required' => 'O primeiro nome é obrigatório.',
            'last_name.required' => 'O sobrenome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'email.unique' => 'O e-mail já está cadastrado.',
            'password.required' => 'A senha é obrigatória.',
            'sector_id.required' => 'O setor é obrigatório.',
            'sector_id.integer' => 'O valor desse campo é obrigatório ser um número.',
        ];

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'photo' => 'image|mimes:png,jpg,jpeg|max:2048',
            'password' => 'required|string|min:6',
            'sector_id' => 'required|integer'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->level = 4;
        $user->sector_id = $request->input('sector_id');;

        if ($request->hasFile('photo')) {
            $request->file('photo')->store('public/photos');
            $user->photo = $request->file('photo')->hashName();
        }

        if (!$user->save()) {
            return response()->json(['errors' => 'Erro ao cadastrar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Usuário cadastrado com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.login')]);
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
    public function edit(User $user)
    {
        $sectors = Sector::all();
        return view('themes.admin.users.edit', ['user' => $user, 'sectors' => $sectors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $customMessages = [
            'first_name.required' => 'O primeiro nome é obrigatório.',
            'last_name.required' => 'O sobrenome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'email.unique' => 'O e-mail já está cadastrado.',
            'sector_id.required' => 'O setor é obrigatório.',
            'sector_id.integer' => 'O valor desse campo é obrigatório ser um número.',
        ];

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'photo' => 'image|mimes:png,jpg,jpeg|max:2048',
            'password' => 'nullable|string|min:6',
            'sector_id' => 'required|integer'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->sector_id = $request->input('sector_id');

        if ($request->hasFile('photo')) {
            ($user->photo) ? Storage::delete('public/photos/' . $user->photo) : null;
            $request->file('photo')->store('public/photos');
            $user->photo = $request->file('photo')->hashName();
        }

        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        if (!$user->save()) {
            return response()->json(['errors' => 'Erro ao atualizar, verifique os dados...', 'status' => 'danger'], 500);
        }

        session()->flash('message', (object)[
            'message' => 'Usuário atualizado com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.users.home')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        ($user->photo) ? Storage::delete('public/photos/' . $user->photo) : null;
        $user->delete();

        session()->flash('message', (object)[
            'message' => 'O usuário foi excluído com sucesso...',
            'status' => 'success'
        ]);
        return response()->json(['redirect' => route('admin.users.home')]);
    }
}
