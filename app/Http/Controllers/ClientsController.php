<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    // méthode pour lister nos clients
    public function list() {
        $clients = Client::all();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function store() {

        request()->validate([
            'pseudo' => 'required'
        ]);

        $pseudo = request('pseudo');

        $client = new Client();
        $client->name = $pseudo;
        $client->save();

        return back();
    }
}
