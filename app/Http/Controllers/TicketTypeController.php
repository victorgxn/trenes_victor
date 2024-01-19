<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ticketTypes/index', ['ticketTypes' => TicketType::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticketTypes/create', ['ticketTypes' => TicketType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $TicketType = new TicketType;
        $TicketType->type = $request->input('type');
        $TicketType->save();
        
        return redirect('ticketTypes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('ticketTypes/show', ['ticketTypes' => TicketType::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('ticketTypes/edit', ['ticketType' => ticketType::find($id), 'ticketTypes' => TicketType::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $TicketType = TicketType::find($id);
        $TicketType->type = $request->input('type');
        $TicketType->save();
        return redirect('ticketTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
