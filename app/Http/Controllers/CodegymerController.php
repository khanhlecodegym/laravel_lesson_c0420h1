<?php

namespace App\Http\Controllers;

use App\Codegymer;
use App\CodegymGroup;
use App\Http\Requests\CodeGymerRequest;
use Illuminate\Http\Request;

class CodegymerController extends Controller
{
    public function index() {
        $codegymers = Codegymer::where("active", true)->paginate(2);

        // dd($codegymers[0]->group->name);

        return view('codegymer.index', compact('codegymers'));
    }

    public function create() {
        $groups = CodegymGroup::all();

        return view('codegymer.create', compact('groups'));
    }

    public function store(CodeGymerRequest $request) {
        // $data = request()->validate([
        //     'name' => 'required|min:5',
        //     'email' => 'email'
        // ]);

        Codegymer::create($request->all());

        return redirect('/codegymer');
    }

    public function show(Codegymer $codegymer) {

        return view('codegymer.show', compact('codegymer'));
    }

    public function edit(Codegymer $codegymer) {

        return view('codegymer.edit', compact('codegymer'));
    }

    public function update(Codegymer $codegymer) {
        // $data = request()->validate([
        //     'name' => 'required|min:5',
        //     'email' => 'email'
        // ]);

        $codegymer->update($this->validatedData());

        return redirect('/codegymer');
    }

    protected function validatedData() {
        return request()->validate([
            'name' => 'required|min:5',
            'email' => 'email',
            'codegymergroup_id' => 'required'
        ]);
    }

    public function destroy(Codegymer $codegymer) {

        $codegymer->delete();

        return redirect('/codegymer');
    }
}
