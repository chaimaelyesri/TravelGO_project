<?php

namespace App\Http\Controllers;

use Request;

use App\Models\User;


use App\Http\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $bookings = DB::table('bookings')
            ->get();

        $adventures = DB::table('adventures')
            ->get();

        $activities = DB::table('activities')
            ->get();

        $posts = DB::table('posts')
            ->get();

        return view('backend.dashboard', compact('bookings','adventures','activities','posts'));
    }



    public function users(){
        $users = DB::table("users")->get();
        return view('backend/usertable', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()
            ->with('success', 'User deleted successfully');
    }




}
