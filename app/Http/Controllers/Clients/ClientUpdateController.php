<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\Clients\UpdateClientRequest;

class ClientUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateClientRequest $request, $id )
    {
        $client = Client::find($id);
        $client->update($request->all());
        return response()->json($client); 
    }
}
