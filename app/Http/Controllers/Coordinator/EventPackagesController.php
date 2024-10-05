<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\EventPackage;
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
                'package_guest' => 'required|integer',
                'package_price' => 'required|numeric',
                'package_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('package_image')) {
                $image = $request->file('package_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/uploads'),$imageName);
                $validatedData['package_image'] = 'public/assets/images/uploads/' . $imageName;
            }

            EventPackage::create($validatedData);
            return response(redirect()->back()->with('success', 'Event package added submitted successfully!'),200);
        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(),500);
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
        return response(view('coordinator.event-packages.edit', compact('eventPackage')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventPackage  $eventPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventPackage $eventPackage, $id)
    {
        try {
            $eventPackage = EventPackage::findOrFail($id);

            $validatedData = $request->validate([
                'package_name' => 'required|string|max:255',
                'package_type' => 'required|string|max:255',
                'package_description' => 'required|string',
                'package_guest' => 'required|integer',
                'package_price' => 'required|numeric',
                'package_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('package_image')) {
                // Delete the old image if it exists
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
            } else {
                $eventPackage['package_image'] = $eventPackage->package_image;
            }

            $eventPackage->update($validatedData);
            return response(redirect()->back()->with('success', 'Event package updated successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
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
