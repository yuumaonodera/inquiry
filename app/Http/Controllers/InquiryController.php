<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;

class InquiryController extends Controller
{
    public function index()
    {
        $item = Inquiry::all();
        return view('index', ['item' => $item]);
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Inquiry::create($form);
        return redirect('/');
    }
    public function confirm(Request $request)
    {
        $inputs = $request->all();
        return view('/keep' , [
            'inputs' => $inputs,
        ]);
    }
    public function send(Request $request)
    {
        $kings = $request->all();
        return view('/keep', ['kings' => $kings]);
    }
}
