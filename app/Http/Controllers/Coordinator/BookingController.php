<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\BookingDetail;
use App\Models\Client;
use App\Models\EventPackage;
use App\Models\ListOfServices;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = BookingDetail::orderBy('created_at', 'desc')->get();
        return response(view('coordinator.booking.index', compact('booking')), 200);
    }

    public function clientBooking() {
        $listOfServices = ListOfServices::with('package')->get();
        return response(view('booking', compact('listOfServices')));
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
                'email' => 'required|string|max:255',
                'phonenum' => 'required|string|max:255',
                'date' => 'required|date',
                'event_type' => 'required|string|max:255',
                'guests' => 'required|integer',
                'venue' => 'required|string|max:255',
                'budget' => 'required|string|max:255',
                'motif' => 'required|array',
                'motif.*' => 'string|max:255',
            ]);

            $client = Client::firstOrCreate(
                ['client_email' => $validatedData['email']],
                [
                    'client_fname' => $validatedData['first_name'],
                    'client_lname' => $validatedData['last_name'],
                    'client_phonenum' => $validatedData['phonenum'],
                    'client_email' => $validatedData['email'],
                ]
            );

            $bookingId = Str::uuid()->toString();
            $package = EventPackage::where('package_type', $validatedData['event_type'])->first();
            if (!$package) {
                return response(redirect()->back()->with('error', 'Invalid event type selected.'), 422);
        }
            BookingDetail::create([
                'booking_id' => $bookingId,
                'event_date' => $validatedData['date'],
                'event_type' => $validatedData['event_type'],
                'guests' => $validatedData['guests'],
                'venue' => $validatedData['venue'],
                'budget' => $validatedData['budget'],
                'motif' => implode(',', $validatedData['motif']),
                'status' => 'Pending',
                'client_id' => $client->client_id,
                'package_id' => $package->package_id
            ]);

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
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required|in:Confirmed,Declined,Pending',
            ]);
        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(),500);
        }

        $booking = BookingDetail::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return response(redirect()->back()->with('success', 'Booking updated!'), 200);
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
