<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Dados;
use App\Modules\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Dados $dado_model, Feedback $feedback_model)
    {
        $this->middleware('auth');
        $this->dado_model = $dado_model;
        $this->feedback_model = $feedback_model;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dados = $this->dado_model->where('accepted', 0)->get();
        return view('home', compact('dados'));
    }

    public function save(Request $request)
    {
        $dado = $this->dado_model->create($request->toArray());
        info($dado);
    }

    public function accepted($id)
    {
        $this->dado_model->findOrFail($id)->update(['accepted' => 1]);
    }

    public function dado($id)
    {
        $dado = $this->dado_model->with('feedbacks')->findOrFail($id);
        return view('dado', compact('dado'));
    }

    public function feedback(Request $request, $id)
    {
        $request['dado_id'] = $id;
        $feedback = $this->feedback_model->create($request->toArray());

    }
}
