<?php

namespace App\Http\Controllers;

use App\Models\BookingDetail;
use App\Models\Client;
use App\Models\ListOfServices;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listOfServices = ListOfServices::with('package')->get();
        return response(view('contact', compact('listOfServices')), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'email' => 'required|string|max:255',
                'phone_num' => 'required|string|max:255',
                'date' => 'required|date',
                'venue' => 'required|string|max:255',
                'budget' => 'required|string|max:255',
                'guests' => 'required|string|max:255',
                'message' => 'required|string|max:255',
            ]);

            $client = Client::firstOrCreate(
                ['client_email' => $validatedData['email']],
                [
                    ['client_email' => $validatedData['email']],
                    [
                        'client_fname' => $validatedData['first_name'],
                        'client_lname' => $validatedData['last_name'],
                        'client_phonenum' => $validatedData['phone_num'],
                        'client_email' => $validatedData['email'],
                    ]
                ]
            );

            $bookingId = BookingDetail::max('booking_id') + 1;

            $date = $validatedData['date'];
            $dateTime = new \DateTime($date);
            $formattedDate = $dateTime->format('Y-m-d');
            $formattedTime = $dateTime->format('H:i:s');

            $bookingDetail = BookingDetail::create([
                'booking_id' => $bookingId,
                'event_date' => $formattedDate,
                'event_time' => $formattedTime,
                'guests' => $validatedData['guests'],
                'venue' => $validatedData['venue'],
                'budget' => $validatedData['budget'],
                'status' => 'Pending',
                'message' => $validatedData['message'],
                'client_id' => $client->client_id,
            ]);

            if (!$bookingDetail->save()) {
                return response(redirect()->back()->with('error', 'Error: Something went wrong with saving booking detail.'), 500);
            }


            return response(redirect()->back()->with('success', 'Booking inquiry submitted successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
        } catch (\Exception $e) {
            return response(redirect()->back()->with('error', 'An unexpected error occurred.'), 500);
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
