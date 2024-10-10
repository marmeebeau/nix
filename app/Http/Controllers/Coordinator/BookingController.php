<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\BookingDetail;
use App\Models\Client;
use App\Models\Coordinator;
use App\Models\EventPackage;
use App\Models\ListOfServices;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
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
        $uniquePackageType = EventPackage::select('package_type')
            ->distinct()
            ->get();

        $uniquePackageGuest = EventPackage::select('package_guest')
            ->where('package_guest', '!=', '')
            ->distinct()
            ->get();


        $listOfServices = ListOfServices::with('package')->get();
        return response(view('booking', compact('listOfServices', 'uniquePackageType', 'uniquePackageGuest')), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $packages = EventPackage::select('package_name', 'package_id')
            ->distinct()
            ->get();
        $coordinators = Coordinator::all();

        return response(view('coordinator.booking.create', compact('clients', 'packages', 'coordinators')),200);
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
                'event_date' => 'required|date',
                'event_time' => 'required',
                'guests' => 'required|string',
                'venue' => 'required|string',
                'budget' => 'required|string',
                'message' => 'nullable|string',
                'client_id' => 'required|exists:clients,client_id',
                'package_id' => 'required|exists:event_packages,package_id',
                'coordinator_id' => 'required|exists:coordinators,coordinator_id',
            ]);

            // dd($request->all());

            // Log::info($request->all());
            // Log::debug('Request data:', $request->all());


            $validatedData['status'] = 'Pending';

            BookingDetail::create($validatedData);
            return response(redirect()->back()->with('success', 'Booking created successfully!'),200);
        } catch (ValidationException $e) {
            return response(redirect()->back()->with('error', 'Validation Error: ' . $e->getMessage() . ' | Request Input: ' . json_encode($request->all())),422);
        } catch (\Exception $e) {
            return response(redirect()->back()->with('error', 'General Error: ' . $e->getMessage()), 500);
        }
    }


    /**
     * Store a newly created resource in storage on the client side booking view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeClientBooking(Request $request)
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
    public function edit(BookingDetail $bookingDetail, $id)
    {
        $booking = BookingDetail::findOrFail($id);
        $clients = Client::all();
        $packages = EventPackage::select('package_name', 'package_id')
            ->distinct()
            ->get();
        $coordinators = Coordinator::all();

        return response(view('coordinator.booking.edit', compact('booking', 'clients', 'packages', 'coordinators')), 200);
    }

    public function update(Request $request, $id)
    {
        try {
            $bookingDetail = BookingDetail::findOrFail($id);

            $validatedData = $request->validate([
                'event_date' => 'required|date',
                'event_time' => 'required',
                'guests' => 'required|string',
                'venue' => 'required|string',
                'budget' => 'required|string',
                'message' => 'nullable|string',
                'client_id' => 'required|exists:clients,client_id',
                'package_id' => 'required|exists:event_packages,package_id',
                'coordinator_id' => 'required|exists:coordinators,coordinator_id',
            ]);

            $bookingDetail->update($validatedData);

            return redirect()->back()->with('success', 'Booking updated successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', 'Validation Error: ' . $e->getMessage() . ' | Request Input: ' . json_encode($request->all()))->withInput()->withErrors($e->validator->errors());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'General Error: ' . $e->getMessage());
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required|in:Confirmed,Declined,Pending,Finished',
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
