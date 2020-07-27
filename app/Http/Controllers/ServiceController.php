<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        // dd(Auth::user()->role);

        if(Auth::user()->role === 2) {
            $services = Service::all();
            $message = "Chào bạn mình ngồi đây từ sáng";

            return view('services', compact('services', 'message'));
        }

        return redirect('/');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required|min:3'
        ]);
        Service::create($data);

        // $service = new Service();

        // $service->title = request('title');
        // $service->save();

        return redirect()->back();
    }
}
