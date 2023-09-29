<?php


namespace ici\HelloWorld\Http\Controllers;


use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
   /**
    * Function prints the string `Hello world~!`
    *
    * @return string
    */
   public function index()
   {
       return view('hello-world::index');
   }
}
