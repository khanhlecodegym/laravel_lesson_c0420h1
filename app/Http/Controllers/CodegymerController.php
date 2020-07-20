<?php

namespace App\Http\Controllers;

use App\Codegymer;
use Illuminate\Http\Request;

class CodegymerController extends Controller
{
    public function index() {
        $codegymers = Codegymer::all();

        return view('codegymer.index', compact('codegymers'));
    }

    public function create() {

        return view('codegymer.create');
    }

    public function store() {
        // $data = request()->validate([
        //     'name' => 'required|min:5',
        //     'email' => 'email'
        // ]);

        Codegymer::create($this->validatedData());

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
            'email' => 'email'
        ]);
    }

    public function destroy(Codegymer $codegymer) {

        $codegymer->delete();

        return redirect('/codegymer');
    }
}
