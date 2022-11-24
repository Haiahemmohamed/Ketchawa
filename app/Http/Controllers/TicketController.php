<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Ticket;
use Illuminate\Support\Facades\Redirect;


class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
        //
        $request->validate([
            'open_date'=>'required',
            'title'=> 'required',
            'requester' => 'required',
            'department' => 'required',
            'office' => 'required',
            'job' => 'required',
            'ticket_category' => 'required',
            'priority' => 'required',
            'ticket_status' => 'required',
            'description' => 'nullable'
        ]);

        $ticket = new Ticket([
            'open_date' => $request->get('open_date'),
            'title' => $request->get('title'),
            'requester' => $request->get('requester'),
            'department' => $request->get('department'),
            'office' => $request->get('office'),
            'job' => $request->get('job'),
            'ticket_category' => $request->get('ticket_category'),
            'priority' => $request->get('priority'),
            'ticket_status' => $request->get('ticket_status'),
            'description' => $request->get('description')
        ]);
        $ticket->save();

        return Redirect::route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ticket = ticket::findOrFail($id);
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ticket = ticket::findOrFail($id);
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketRequest  $request
     * @param  \App\Models\Ticket $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketRequest $request, $id)
    {
        //
        $request->validate([
            'open_date'=>'required',
            'title'=> 'required',
            'requester' => 'required',
            'department' => 'required',
            'office' => 'required',
            'job' => 'required',
            'ticket_category' => 'required',
            'priority' => 'required',
            'ticket_status' => 'required',
            'description' => 'nullable'
        ]);

        $ticket = ticket::findOrFail($id);
        $ticket->open_date = $request->get('open_date');
        $ticket->title = $request->get('title');
        $ticket->requester = $request->get('requester');
        $ticket->department = $request->get('department');
        $ticket->office = $request->get('office');
        $ticket->job  = $request->get('job');
        $ticket->priority = $request->get('priority');
        $ticket->ticket_status = $request->get('ticket_status');
        $ticket->description = $request->description ? $request->description:"";
        $ticket->update();

        return Redirect::route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return Redirect::route('tickets.index');
    }
}
