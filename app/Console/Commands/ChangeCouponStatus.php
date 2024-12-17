<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Coupon;
use Illuminate\Console\Command;

class ChangeCouponStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coupon:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change Coupon Status';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $coupons = Coupon::all();
        $currentDate = Carbon::now();
        foreach ($coupons as $coupon) {
            $expiryDate = Carbon::parse($coupon->expiry_at); // أو استخدام createFromFormat إذا كان التنسيق مختلفًا

            if ($currentDate->greaterThan($expiryDate)) {
                $coupon->is_active = 0;
                $coupon->save();
            }
        }


    }
}
