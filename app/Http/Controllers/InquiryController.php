<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        $item = Inquiry::all();
        return view('index')->with('item',$item);
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Inquiry::create($form);
        return redirect('/keep');
    }
    public function confirm(Request $request)
    {
        $inputs = $request->all();
        return view('keep' , [
            'inputs' => $inputs,
        ]);
    }
    public function send(Request $request)
    {
    }
}
