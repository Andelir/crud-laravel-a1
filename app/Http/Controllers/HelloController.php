<?php
namespace App\Http\Controllers;

class HelloController extends Controller {

    public function index(string $lastname) : string
    {
        return "<h1 style='color: rebeccapurple'>Hello $lastname</h1>";
    }

    public function myFirstView(string $data)
    {
        return view('saludo', compact('data'));
    }

    /*public function __invoke(string $name) : string
    {
        return "<h1 style='color: rebeccapurple'>Hello $name</h1>";
    }
*/
}
