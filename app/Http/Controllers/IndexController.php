<?php

namespace App\Http\Controllers; //пространство имен

use Illuminate\Http\Request; //доступ к классу Request

use App\Book; //подключение модели Book, необходимо подключать, если нужно работать с ее методами

class IndexController extends Controller
{
    //
    public function index(){
        $header = 'Psy & Soft Listbook';
        $message = 'This is my listbook';

        //$books = Book::all(); //статический метод, возвращающий все записи из таблицы books, возвращающую объект типа Collection
        $books = Book::select(['id', 'title', 'description', 'date_create'])->get(); //select - метод конструктора запроса, get - метод формирования запроса, позволяющий выбрать конкретные поля,  возвращает коллекцию

        //dump($books); //функция-хелпер аналог var_dump

        return view('bookList')->with(['message'=>$message,
                                             'header'=>$header,
                                             'books'=>$books]);
    }
}
