<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;

class ContractController extends Controller
{
    public function index() {
        $page = '1';
        return view('form', compact('page'));
    }

    public function step1() {
        $data = request()->all();
        $data['user_id'] = auth()->user()->id;
        $contract = Contract::create($data);

        $page = '2';
        return view('form', compact('page'));
    }

    public function step2() {
        $data = request()->all();
        $contract = Contract::where('user_id', auth()->user()->id)->first();
        $contract = Contract::create($data);

        $page = '3';
        return view('form', compact('page'));
    }
}
