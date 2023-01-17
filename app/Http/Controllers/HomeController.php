<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\City;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

use App\Models\Activity;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts =  Post::latest()->take(4)->get();

        $activities = DB::table("activities")
            ->limit(5)
            ->get();

        $cities = DB::table("cities")
            ->limit(5)
            ->get();

        return view('frontend/main_pages/home', compact('activities','cities','posts'));
    }

    /** Start Blog **/

    public function BlogList()
    {
        $latest = Post::latest()->take(4)->get();
        $posts = Post::latest()->simplepaginate(7);
        return view('frontend.blog.blog', compact('posts','latest'))->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function BlogSingle($id)
    {
        $latest = Post::latest()->take(4)->get();
        $posts = Post::find($id);
        return view('frontend.blog.blog_single', compact('posts','latest'));
    }

    /** End Blog**/

    /** Start Activity **/

    public function offerscity($id)
    {
        $cities=City::find($id);
        $activities = DB::table("cities")
            ->join('activities', 'cities.id', '=', 'activities.city_id')
            ->where('city_id','=',$id)
            ->simplepaginate(10);

        return view('frontend/activities/activities', compact(  'activities','cities'));
    }

    public function offers()
    {
        $activities = Activity::orderby('id')->simplepaginate(10);
        return view('frontend/activities/activities', compact('activities'));

    }


    public function showDetail($id)
    {
        $activity = Activity::find($id);
        return view('frontend/activities/activity-detail', ['activity' => $activity, 'id' => $id ], compact('activity', 'id'));
    }

    /** End activity **/


    /** start adventure **/

    public function adventure()
    {
        $popular = Adventure::latest()->take(7)->get();
        $adventure = Adventure::all()->take(4);
        $adventures = Adventure::all();
        return view('frontend/adventures/adventures', compact('adventure','adventures','popular'));
    }

    public function showadventures()
    {
        $adventures = Adventure::orderby('id')->simplepaginate(10);
        return view('frontend.adventures.adventureslist', compact('adventures'));
    }

    public function ShowAdventure($id)
    {
        $city = DB::table("adventures")
            ->join('cities', 'cities.id', '=','adventures.city_id')
            ->where('adventures.id','=',$id)
            ->get();
        $image = DB::table("adventures")
            ->join('images', 'adventures.id', '=','images.adventure_id')
            ->where('adventures.id','=',$id)
            ->get();
        $adventure = Adventure::find($id);
        return view('frontend/adventures/adventure-detail', ['adventure' => $adventure, 'id' => $id , 'city'=> $city], compact('adventure', 'id', 'city','image'));
    }

    /** End adventure **/


    /** Start search **/

    public function activitysearch(){

        $search = request()->input('search');

        $city= request()->input('searchcity');

        $results = DB::table("activities")
            ->join('cities', 'cities.id', '=','activities.city_id')
            ->where('cities.city', $city)
            ->orWhere('category', $search)
            ->get();

        return view('frontend.activities.searchactivities',compact('results','city','search'));

    }

    public function adventuresearch(){

        $city= request()->input('searchcity');
        $results = DB::table("adventures")
            ->join('cities', 'cities.id', '=','adventures.city_id')
            ->where('cities.city', $city)
            ->get();

        return view('frontend.adventures.searchadventures',compact('results','city'));

    }

    /** End search **/


    public function about()
    {
        return view('frontend/secondary_pages/about');
    }

    public function terms()
    {
        return view('frontend/secondary_pages/terms');
    }

    public function addtolist(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
        ]);

        $email=$request->email;
        $results = DB::insert('insert into subscribers (email) values (?)', [$email]);
        if ($results && $validation){
            return Redirect::to('/home' . "#newsletter")->with('news_message', 'From now on you will be lucky to receive our newsletters, tips and offers');
        }else{
            return Redirect::to(URL::previous() . "#newsletter")->with('news_message', 'Oops, something went wrong, try again later meh :/');
        }


    }

}
