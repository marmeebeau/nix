<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\EventPackage;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Review::orderBy('created_at', 'desc')->get();
        return response(view('coordinator.feedbacks.index', compact('data')), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('coordinator.feedbacks.create'), 200);
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
                'rating' => 'required|integer|min:1|max:5',
                'review_description' => 'required|string',
                'package_id' => 'required|exists:event_packages,package_id',
                'client_id' => 'required|exists:clients,client_id',
            ]);

            Review::create($validatedData);
            return response(redirect()->back()->with('success', 'Review submitted successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review, $id)
    {
        $review = Review::findOrFail($id);
        $eventPackages = EventPackage::all();
        $clients = Client::all();
        return response(view('coordinator.feedbacks.edit', compact('review', 'eventPackages', 'clients')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review, $id)
    {
        try {
            $review = Review::findOrFail($id);

            $validatedData = $request->validate([
                'rating' => 'required|integer|min:1|max:5',
                'review_description' => 'required|string',
                'package_id' => 'required|exists:event_packages,package_id',
                'client_id' => 'required|exists:clients,client_id',
            ]);

            $review->update($validatedData);
            return response(redirect()->back()->with('success', 'Review updated successfully!'), 200);

        } catch (ValidationException $e) {
            return response(redirect()->back()->withErrors($e->validator->errors())->withInput(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review, $id)
    {
        try {
            $review = Review::findOrFail($id);
            $review->delete();

            return response(redirect()->back()->with('success', 'Review deleted successfully!'), 200);

        } catch (\Exception $e) {
            return response(redirect()->back()->with('error', 'Failed to delete review.'), 500);
        }
    }
}
