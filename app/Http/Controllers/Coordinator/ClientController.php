<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::orderBy('created_at', 'desc')->get();
        return response(view('coordinator.clients.index', compact('data')), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('coordinator.clients.create'), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
            'client_username' => 'required|string|max:255|unique:clients,client_username',
            'client_fname' => 'required|string|max:255',
            'client_lname' => 'required|string|max:255',
            'client_phonenum' => 'required|string|max:15',
            'client_email' => 'required|email|unique:clients,client_email',
            ]);

            Client::create($validatedData);
            return redirect()->route('client')->with('success', 'Client added successfully!');
        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(),500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, $id)
    {
        $client = Client::findOrFail($id);
        return response(view('coordinator.clients.edit', compact('client')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client, $id)
    {
        try {
            $client = Client::findOrFail($id);

            $validatedData = $request->validate([
                'client_username' => 'required|string|max:255|unique:clients,client_username',
                'client_fname' => 'required|string|max:255',
                'client_lname' => 'required|string|max:255',
                'client_phonenum' => 'required|string|max:15',
                // 'client_email' => 'required|email|unique:clients,client_email,' . $client->client_id,
            ]);


            $client->update($validatedData);
            return redirect()->route('client')->with('success', 'Client updated successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, $id)
    {
        try {
            $client = Client::findOrFail($id);

            if ($client->recommendations) {
                $client->recommendations()->delete();
            }

            $client->delete();
            return redirect()->route('client')->with('success', 'Client deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to delete client'])->withInput();
        }
    }
}
