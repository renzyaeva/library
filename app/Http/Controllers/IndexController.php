<?php

namespace App\Http\Controllers; //пространство имен

use Illuminate\Http\Request; //доступ к классу Request

class IndexController extends Controller
{
    //
    public function showBookList(){
        $header = 'Psy & Soft Listbook';
        $message = 'This is my listbook';
        return view('bookList')->with(['message'=>$message, 'header'=>$header]);
    }
}
