<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\BookingDetail;
use App\Models\Review;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $bookings = BookingDetail::with('client', 'eventPackage')
            ->where('status', 'Confirmed') 
            ->whereHas('review') 
            ->get();

        return view('coordinator.receipts.index', compact('bookings')); 
    }

    public function showReceiptDetails($id) {
        $booking = BookingDetail::with('client', 'eventPackage')->findOrFail($id);
        $rating = Review::where('client_id', $booking->client_id)->avg('rating');
        // $recommendation = $this->getRecommendation($booking);

        $data = [
            'booking' => $booking,
            'rating' => $rating,
            // 'recommendation' => $recommendation,
        ];

        return response(view('coordinator.receipts.receipt', $data), 200);
    }
    public function generateReceiptDetails($id)
    {
        $booking = BookingDetail::with('client', 'eventPackage')->findOrFail($id);
        $rating = $booking->review->rating;
        // $recommendation = $this->getRecommendation($booking); // Your recommendation logic

        $data = [
            'booking' => $booking,
            'rating' => $rating,
            // 'recommendation' => $recommendation,
        ];

        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('coordinator.receipts.receipt', $data);
        return $pdf->download('booking_summary_' . $id . '.pdf');
    }

    private function getRecommendation($booking)
    {

    }
}
