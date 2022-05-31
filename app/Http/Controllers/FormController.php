<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store (Request $request){
        $product = new Form();
        $product -> email=$request->email;
        $product -> pwd=$request->pwd;
        $product -> comment=$request->comment;
        $product -> save();
    }
    public function index(){
        $products= Form::all();
        return view('table',compact('products'));
    }
}
