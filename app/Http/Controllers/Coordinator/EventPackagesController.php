<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\EventPackage;
use App\Models\EventPkgServices;
use App\Models\ListOfServices;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EventPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EventPackage::orderBy('created_at', 'desc')->get();
        return response(view('coordinator.event-packages.index', compact('data')), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('coordinator.event-packages.create'), 200);
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
                'package_name' => 'required|string|max:255',
                'package_type' => 'required|string|max:255',
                'package_description' => 'required|string',
                'package_guest' => 'required|string',
                'package_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('package_image')) {
                $image = $request->file('package_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/uploads'), $imageName);
                $validatedData['package_image'] = 'assets/images/uploads/' . $imageName;
            }

            $eventPackage = EventPackage::create($validatedData);

            ListOfServices::create([
                'package_id' => $eventPackage->package_id,
                'event_pkg_id' => $eventPackage->package_id,
            ]);

            EventPkgServices::create([
                'event_pkg_id' => $eventPackage->package_id,
                'service_price' => $request->input('package_price'),
                'service_name' => $validatedData['package_name'],
                'service_description' => $validatedData['package_description'],
            ]);

            return response(redirect()->back()->with('success', 'Event package added successfully!'), 200);
        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(),422);
        } catch (\Exception $e) {
            return response(redirect()->back()->with('error', 'Error: ' . $e->getMessage()),500);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventPackage  $eventPackage
     * @return \Illuminate\Http\Response
     */
    public function show(EventPackage $eventPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventPackage  $eventPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(EventPackage $eventPackage, $id)
    {
        $eventPackage = EventPackage::findOrFail($id);

        $listOfService = ListOfServices::where('package_id', $eventPackage->package_id)->first();

        $servicePrice = null;
        if ($listOfService) {
            $eventPkgService = EventPkgServices::where('event_pkg_id', $listOfService->event_pkg_id)->first();
            $servicePrice = $eventPkgService ? $eventPkgService->service_price : null;
        }

        return response(view('coordinator.event-packages.edit', compact('eventPackage', 'servicePrice')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventPackage  $eventPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $eventPackage = EventPackage::findOrFail($id);

            $validatedData = $request->validate([
                'package_name' => 'required|string|max:255',
                'package_type' => 'required|string|max:255',
                'package_description' => 'required|string',
                'package_guest' => 'required|integer',
                'package_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('package_image')) {
                if ($eventPackage->package_image) {
                    $oldImagePath = public_path($eventPackage->package_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $image = $request->file('package_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/uploads'), $imageName);
                $validatedData['package_image'] = 'assets/images/uploads/' . $imageName;
            }

            $eventPackage->update($validatedData);

            $listOfService = ListOfServices::where('package_id', $eventPackage->package_id)->first();
            if ($listOfService) {
                $listOfService->update([
                    'package_id' => $eventPackage->package_id,
                    'event_pkg_id' => $eventPackage->package_id,
                ]);
            }

            $eventPkgService = EventPkgServices::where('event_pkg_id', $eventPackage->package_id)->first();
            if ($eventPkgService) {
                $eventPkgService->update([
                    'service_price' => $request->input('package_price'),
                    'service_name' => $validatedData['package_name'],
                    'service_description' => $validatedData['package_description'],
                ]);
            }

            return response(redirect()->back()->with('success', 'Event package updated successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
        } catch (\Exception $e) {
            return response(redirect()->back()->with('error', 'Error: ' . $e->getMessage()), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventPackage  $eventPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventPackage $eventPackage, $id)
    {
        try {
            $eventPackage = EventPackage::findOrFail($id);
            $eventPackage->delete();

            return response(redirect()->back()->with('success', 'Event Package deleted submitted successfully!'),200);
        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(),500);
        }
    }
}
