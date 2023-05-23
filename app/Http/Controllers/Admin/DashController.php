<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * @return string
     */
    public function dash(Request $request)
    {
        $sector_id = auth()->user()->sector_id;
        $competences = Competence::where('sector_id', $sector_id);

        return redirect()->route('admin.dash.home');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $sector_id = auth()->user()->sector_id;
        $competences = Competence::where('sector_id', $sector_id)->get();

        return view("themes.admin.dash.index", ['competences' => $competences]);
    }

    public function quiz(Request $request)
    {
        $responses = $request->except('_token');
        $userId = auth()->user()->id;
        foreach ($responses as $key => $value) {
            $createResponse = new Response();
            $createResponse->response = $value;
            $createResponse->user_id = $userId;
            $createResponse->question_id = $key;
            $createResponse->save();
        }

        return redirect()->route('admin.dash.home');
    }
}
