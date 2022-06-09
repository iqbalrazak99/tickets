<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // nak tengok list tiket je bang
    {
        $tickets = Ticket::orderBy('id','desc')->get();  //
       // dd($tickets); // nak tengok samada boleh panggil ke tak data.
        return view('tickets.index', compact('tickets'));  // run ke folder tickets file index
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //nak buat tiket baru
    {
        return view('tickets.create');
    }

    public function delete(Ticket $ticket)
    {
        return view ('tickets.delete', compact('ticket'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ticket::create([
            'summary'=>request('summary'),
            'description'=>request('description'),
            'status'=>request('status'),
        ]);
        return redirect()->route('tickets.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show' , compact('ticket'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $ticket->summary = request('summary');
        $ticket->description = request('description');
        $ticket->status = request('status');
        $ticket->save();

        return redirect()->route('tickets.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
