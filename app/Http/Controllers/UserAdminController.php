<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function dashboard()
    {
        $expire = \App\Models\Expire::all()->first();

        if ($expire) {
            $finish_date = Carbon::parse($expire->expire_date);
            $start_date = Carbon::now();
            if ($start_date->diffInDays($finish_date, false) > 0) {
                $time_difference = $start_date->diffInDays($finish_date, true);
            } else {
                $time_difference = 0;
            }
        } else {
            $time_difference = "Not yet set by admin";
        }

        return view('user.dashboard.dashboard', compact('time_difference'));
    }

    public function about()
    {
        return view('user.admin_content.about.about');
    }

    public function profile()
    {
        return view('user.profile.profile');
    }
}
