<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Room;
use App\Models\Service;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBookings = Booking::count();
        $totalGuests = Guest::count();
        $availableRooms = Room::where('status', 'available')->count();
        $occupiedRooms = Room::where('status', 'occupied')->count();
        $maintenanceRooms = Room::where('status', 'maintenance')->count();
        $totalRooms = Room::count();
        $totalServices = Service::count();

        // Bookings per month
        $bookingsPerMonth = [];
        $months = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthName = Carbon::create()->month($i)->format('F');
            $months[] = $monthName;
            $count = Booking::whereMonth('check_in', $i)->count();
            $bookingsPerMonth[] = $count;
        }

        // Room status distribution (used in chart)
        $roomStatusDistribution = Room::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();

        return view('dashboard', compact(
            'totalBookings',
            'totalGuests',
            'availableRooms',
            'occupiedRooms',
            'maintenanceRooms',
            'totalRooms',
            'totalServices',
            'bookingsPerMonth',
            'months',
            'roomStatusDistribution'
        ));
    }
}
