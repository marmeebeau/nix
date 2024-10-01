<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(view('coordinator.profile.index'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinator $coordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinator $coordinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coordinator $coordinator, $id)
    {
        try {
            $coordinator = Coordinator::findOrFail($id);

            $validatedData = $request->validate([
                'coordinator_username' => 'required|string|max:255|unique:coordinators,coordinator_username,' . $coordinator->coordinator_id,
                'email' => 'required|email|max:255|unique:coordinators,email,' . $coordinator->coordinator_id,
                'coordinator_fname' => 'required|string|max:255',
                'coordinator_lname' => 'required|string|max:255',
                'coordinator_contactnumber' => 'required|string|max:15',
                'coordinator_city' => 'required|string|max:255',
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('profile_image')) {
                if ($coordinator->profile_image) {
                    $oldImagePath = public_path($coordinator->profile_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $image = $request->file('profile_image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/uploads'), $imageName);
                $validatedData['profile_image'] = 'assets/images/uploads/' . $imageName;
            }

            $coordinator->update($validatedData);
            return response(redirect()->back()->with('success', 'Coordinator updated successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coordinator  $coordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinator $coordinator)
    {
        //
    }
}
