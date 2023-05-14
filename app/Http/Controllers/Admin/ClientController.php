<?php

namespace App\Http\Controllers\Admin;
use App\helpers\Attachment;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;



class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients=Client::all();
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    

    public function store(ClientRequest $request)
    {
        
        $client=Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        Attachment::addAttachment($request->file('attachment'), $client, 'clients/image', ['save' => 'original','usage'=>'image']);

        return redirect('/clients');
    }



    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $client=Client::find($id);
    return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
    $client=Client::find($id);
    $client->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
       ]);
       $old = $client->attachmentRelation[0];
    Attachment::updateAttachment($request->attachment ,$old, $client ,  'clients/image', ['save' => 'original','usage'=>'image']);

    return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $client=Client::find($id);
    $attachment=$client->attachmentRelation[0];
    $client->delete();
    $attachment->delete();
    return redirect('/clients');
    }
}
