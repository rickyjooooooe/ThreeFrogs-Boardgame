<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AdminController extends Controller
{
    // Display reservations
    public function index()
    {
        $reservations = Reservation::orderBy('reservation_date', 'desc')->get();
        $deletedReservations = DB::table('deleted_reservations')->orderBy('created_at', 'desc')->get();

        return view('adminindex', compact('reservations', 'deletedReservations'));
    }

    // Handle deletion of active reservation and log it
    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return response()->json(['success' => false, 'message' => 'Reservation not found.'], 404);
        }

        $endTime = Carbon::now();
        $startTime = Carbon::parse($reservation->reservation_time);
        $duration = $startTime->diffInMinutes($endTime);

        DB::table('deleted_reservations')->insert([
            'user_id' => $reservation->id,
            'name' => $reservation->name,
            'email' => $reservation->email,
            'phone' => $reservation->phone,
            'reservation_date' => $reservation->reservation_date,
            'reservation_time' => $reservation->reservation_time,
            'end_time' => $endTime->format('H:i:s'),
            'duration_time' => $duration,
            'num_people' => $reservation->num_people,
            'message' => $reservation->message,
            'created_at' => $endTime,
        ]);

        $reservation->delete();

        return response()->json(['success' => true, 'message' => 'Reservation checked out and logged successfully.'], 200);
    }

    // Handle deletion of a record from deleted_reservations
    public function deleteLog($id)
    {
        $deletedReservation = DB::table('deleted_reservations')->where('id', $id)->first();

        if (!$deletedReservation) {
            return response()->json(['success' => false, 'message' => 'Deleted reservation not found.'], 404);
        }

        DB::table('deleted_reservations')->where('id', $id)->delete();

        return response()->json(['success' => true, 'message' => 'Deleted reservation removed successfully.'], 200);
    }
    

    public function adminDashboard()
{
    // Ambil semua reservasi yang sudah dihapus untuk ditampilkan di tabel
    $deletedReservations = DB::table('deleted_reservations')->get();

    // Ambil semua reservasi aktif untuk tabel utama
    $reservations = DB::table('reservations')->get();

    // Ambil jumlah reservasi berdasarkan jam untuk chart Peak Hours
    $peakHours = DB::table('deleted_reservations')
        ->select(DB::raw('HOUR(reservation_time) as hour, COUNT(*) as total'))
        ->groupBy('hour')
        ->orderBy('hour')
        ->get();

    $hours = $peakHours->pluck('hour')->toArray();
    $reservations_count = $peakHours->pluck('total')->toArray();

    $playtimeData = DB::table('deleted_reservations')
    ->select(DB::raw('DATE(reservation_date) as date'), DB::raw('AVG(duration_time) as avg_playtime'))
    ->groupBy('date')
    ->orderBy('date', 'ASC')
    ->get();

$dates = $playtimeData->pluck('date')->toArray();
$avg_playtimes = $playtimeData->pluck('avg_playtime')->toArray();


    // 📌 Tambahan: Ambil tren reservasi per hari untuk Line Chart
    $reservationsPerDay = DB::table('deleted_reservations')
        ->select(DB::raw('DATE(reservation_date) as date, COUNT(*) as total'))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

    $dates = $reservationsPerDay->pluck('date')->toArray();
    $daily_reservations = $reservationsPerDay->pluck('total')->toArray();
    $reservationsByHourDay = DB::table('deleted_reservations')
        ->select(DB::raw('HOUR(reservation_time) as hour, DAYOFWEEK(reservation_date) as day, COUNT(*) as total'))
        ->groupBy('hour', 'day')
        ->orderBy('day')
        ->orderBy('hour')
        ->get();

    // Format data agar mudah digunakan di chart
    $formattedData = [];
    foreach ($reservationsByHourDay as $data) {
        $formattedData[$data->day][$data->hour] = $data->total;
    }

    // Pastikan semua jam (0-23) ada dalam data
    $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    $hourlyData = [];
    foreach ($daysOfWeek as $dayIndex => $day) {
        $hourlyData[$day] = [];
        for ($h = 0; $h < 24; $h++) {
            $hourlyData[$day][] = $formattedData[$dayIndex + 1][$h] ?? 0;
        }
    }

    return view('adminindex', compact(
        'reservations', 
        'deletedReservations', 
        'hours', 
        'reservations_count', 

        'dates',
        'daily_reservations',
        'avg_playtimes',
        'hourlyData',
        'daysOfWeek'
        
    ));
}
    

}
