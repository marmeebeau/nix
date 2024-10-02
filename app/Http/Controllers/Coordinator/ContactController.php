<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return(response(view('contact')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'date' => 'required|date',
                'venue' => 'required|string|max:255',
                'budget' => 'required|string|max:255',
                'guests' => 'required|integer',
                'message' => 'required|string',
            ]);

            BookingDetail::create($validatedData);
            return response(redirect()->back()->with('success', 'Booking inquiry submitted successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingDetail $bookingDetail)
    {
        //
    }
}
