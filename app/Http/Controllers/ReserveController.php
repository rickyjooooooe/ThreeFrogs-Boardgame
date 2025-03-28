<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationConfirmation;

class ReserveController extends Controller
{
    // Show the reservation form
    public function showForm()
    {
        return view('index'); // Return the 'index.blade.php' view
    }

    // Handle the reservation submission

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'phone' => 'required|string|max:15',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
        'people' => 'required|integer|min:1|max:50', // Adjusted to max 50
        'message' => 'nullable|string|max:255',
    ]);

    $reservationDate = $request->date;
    $reservationTime = $request->time;

    // Combine date and time into one datetime string
    $reservationDateTime = \Carbon\Carbon::parse("$reservationDate $reservationTime");

    // Check if the reservation time is in the past
    if ($reservationDateTime->isPast()) {
        session()->flash('reservationStatus', 'error');
        session()->flash('errorMessage', 'The selected date and time must be in the future.');
        session()->put('showModal', true);
        return redirect()->route('index'); // Adjust to the appropriate route
    }

    // Calculate the total number of people already reserved for the same time slot
    $totalReservations = Reservation::where('reservation_date', $reservationDate)->sum('num_people');
    if ($totalReservations + $request->people > 12) {
        session()->flash('reservationStatus', 'error');
        session()->flash('errorMessage', 'The selected table exceeds the maximum capacity of 12 tables.');
        session()->put('showModal', true);
        return redirect()->route('index'); // Adjust to the appropriate route
    }

    // Create the reservation
    Reservation::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'reservation_date' => $reservationDate,
        'reservation_time' => $reservationTime,
        'num_people' => $request->people,
        'message' => $request->message,
    ]);

    session()->flash('reservationStatus', 'success');
    session()->flash('errorMessage', 'Thank you for your reservation!');
    session()->put('showModal', true);
    return redirect()->route('index'); // Adjust to the appropriate route
}


}
