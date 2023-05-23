<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function login(Request $request): View
    {
        // Auth::logout();
        return view("themes.admin.auth.login");
    }

    /**
     * @param Request $request
     * @return View
     */
    public function register(Request $request): View
    {
        $sectorts = Sector::all();
        return view("themes.admin.auth.register", ['sectors' => $sectorts]);
    }

    public function auth(Request $request)
    {
        $customMessages = [
            'email.required' => 'O e-mail obrigatório.',
            'email.email' => 'Esse e-mail não é válido.',
            'password.required' => 'A senha obrigatório.',
            'password.min' => 'A senha precisa ter no mínimo 6 caracteres.'
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 'warning']);
        }

        $user = DB::table('users')->where('email', $request->input('email'))->first();
        if (!$user) {
            return response()->json(['errors' => 'E-mail não cadastrado.', 'status' => 'warning']);
        }

        if (Auth::attempt($validator->validated())) {
            return response()->json(['redirect' => route('admin.dash')]);
        } else {
            return response()->json(['errors' => 'Senha incorreta', 'status' => 'warning']);
        }
    }

    public function store(Request $request)
    {
        $customMessages = [
            'first_name.required' => 'O primeiro nome é obrigatório.',
            'last_name.required' => 'O sobrenome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'O e-mail não é válido.',
            'email.unique' => 'O e-mail já está cadastrado.',
            'password.required' => 'A senha é obrigatória.',
            'sector_id.required' => 'O perfil de acesso é obrigatório.',
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
        return response()->json(['redirect' => route('admin.users.home')]);
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('message', (object)[
            'message' => 'Logout realizado com sucesso!',
            'status' => 'success'
        ]);
        return redirect()->route('admin.login');
    }
}
