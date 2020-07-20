<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HelloController extends Controller
{
    public function index() {
        return view('app');
    }

    public function hello(Request $request) {
        $name = "";

        return view('about', ['name' => $name]);
    }

    public function services(Request $request) {

        $services = Service::all();
        dd($services);

        return view('services',compact('services'));
    }
}
