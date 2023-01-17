<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function admin() {

        return view('backend.profile')->withUser(Auth::user());
    }

    public function dashboard() {

        return view('frontend.profile.profile')->withUser(Auth::user());
    }

    public function updateUserProfile(Request $request)
    {
        $user = Auth::user();
        $user->firstname = request()->input('firstname');
        $user->lastname = request()->input('lastname');
        $user->phone = request()->input('phone');
        $user->email =  request()->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->save();


        return redirect()->back()->with('message','Informations updated successfully !');
    }

    public function customerbooking(){

        $user = Auth::user()->id;
        $orders = DB::table('bookings')
            ->join('users','bookings.user_id','=','users.id')
            ->where('users.id', '=',$user)
            ->simplepaginate(5);
        $bookings = DB::table('bookings')
            ->join('users','bookings.user_id','=','users.id')
            ->where('users.id', '=',$user)
            ->get();
        return view('frontend.profile.bookings',compact('orders','bookings'))->withUser(Auth::user());
    }

}
