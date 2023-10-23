<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientsController
{
    public function index()
    {
        //  $clients = DB::select('SELECT id, name FROM clients');
        //  dd($clients);

       $clients = Client::all();
        //    dd($clients);

       return view('clients.index')->with('clients', $clients);
    } 
    public function show($id)
    {
        echo "<h1> Visualizando Usuários $id.</h1>";
    } 
}
