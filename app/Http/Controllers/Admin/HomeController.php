<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {


        $todayTotalSales = Booking::where('status', 1)
            ->whereDate('created_at', today())
            ->with('service')
            ->get()
            ->sum(fn($booking) => $booking->service->price);

        $yesterdayTotalSales = Booking::where('status', 1)
            ->whereDate('created_at', today()->subDay())
            ->with('service')
            ->get()
            ->sum(fn($booking) => $booking->service->price);


        $percentageChangeDay = $this->calculatePercentageChange($todayTotalSales, $yesterdayTotalSales);


        $dayPositive = $percentageChangeDay > 0;


        $monthSales = Booking::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->where('status', 1)
            ->with('service')
            ->get()
            ->sum(function ($booking) {
                return $booking->service->price;
            });




        $lastMonthSales = Booking::where('status', 1)
            ->whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->with('service')
            ->get()
            ->sum(function ($booking) {
                return $booking->service->price;
            });


        $percentageChangeMonth = $this->calculatePercentageChange($monthSales, $lastMonthSales);
        $monthPositive = $percentageChangeMonth > 0;


        $totalSales = Booking::where('status', 1)
            ->with('service')
            ->get()
            ->sum(function ($booking) {
                return $booking->service->price;
            });



        $bestSellingItems = Booking::where('status', 1)
            ->whereDate('booking_date', '>=', now()->startOfMonth())
            ->whereDate('booking_date', '<=', now()->endOfMonth())
            ->join('services', 'services.id', '=', 'bookings.service_id')
            ->selectRaw('services.id, services.name, COUNT(*) as total_sales, SUM(services.price) as total_revenue')
            ->groupBy('services.id', 'services.name')
            ->orderByDesc('total_sales')
            ->limit(5)
            ->get();




        $lastFiveBookings = Booking::where('status', 1)
            ->latest()
            ->with("service")
            ->take(5)
            ->get();

            // dd($lastFiveBookings);

        return view('admin.home.dashboard', compact("lastFiveBookings","bestSellingItems", 'todayTotalSales', 'yesterdayTotalSales', 'percentageChangeDay', 'dayPositive', 'monthSales', 'lastMonthSales', 'percentageChangeMonth', 'monthPositive', 'totalSales'));
    }



    private function calculatePercentageChange($currentSales, $previousSales)
    {
        if ($previousSales == 0) {
            return $currentSales > 0 ? 100 : 0;
        }

        return intval((($currentSales - $previousSales) / $previousSales) * 100);
    }
}
