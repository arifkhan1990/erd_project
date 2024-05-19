<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function profile($id)
    {
                // Retrieve the user with all related information
        $user = User::with(['personal', 'educational', 'travel', 'banking', 'application'])->find($id);
        if ($user) {
            // Pass the user and related data to the view
            return view('user.profile.profile', compact('user'));
        } else {
            return redirect()->route('users.dashboard')->with('error', 'User not found.');
        }
    }

    public function update(Request $request, $id)
    {
        try{
        // Validate form data
         // /dd($request->all());
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'. $id],
                'occupation' => ['string'],
                'bio' => ['string']
                    // Add other fields here as needed
            ]);

            // Update user profile
            $user = User::find($id);
            $user->update($validatedData);
            return redirect()->route('user.profile', ['id'=> $id])->with('success', 'Profile updated successfully!');
        }catch(\Exception $e) {
            dd($e);
        }
    }

    public function changePassword(Request $request, $id)
    {
        // Validate the form data
        try {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Get the current authenticated user
            $user = User::findOrFail($id);

            // Check if the current password matches
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }

            // Update the user's password
            $user->password = Hash::make($request->password);
            $user->save();

            // Redirect back with success message
            return redirect()->route('user.profile', ['id' => $id])->with('success', 'Password changed successfully!');
        }catch(\Exception $e) {
            // dd($e);
            return redirect()->route('user.profile', ['id' => $id])->with('error', 'Password change Unsuccessfull!');
        }
    }
}
