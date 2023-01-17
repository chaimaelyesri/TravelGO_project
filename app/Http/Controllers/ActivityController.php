<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\City;
use App\Models\Day;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::latest()->simplepaginate(5);

        return view('backend.activities.index', compact('activities'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('city', 'id');
        return view('backend.activities.create', compact('cities', $cities));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'city_id' => 'required',
            'title' => 'required',
            'category' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'price' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'adresse' => 'required',
            'program' => 'required',
            'cover',
        ]);

        $input = $request->all();


        if ($image = $request->file('cover')) {
            $destinationPath = Activity::getCoverPath();
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }

        $activity = Activity::create($input);

        $activity_id = $activity->id;

        if($request->hasfile('images')) {
            $files = $request->file('images');

            foreach($files as $file) {

                $path = 'uploads/activities/';
                $name = time() . "." . $file->getClientOriginalExtension();
                $file->move($path, $name);

                Image::create([
                    'name' => $name,
                    'path' => $path,
                    'activity_id'=>$activity_id ,
                ]);
            }
        }

            foreach ( $request->day_title as $day=>$insert) {

            $data =[
                'day_title' =>$request->day_title[$day],
                'day_description' =>$request->day_description[$day],
                'image' =>$request->image[$day]->store('uploads/days/'),
                'activity_id'=>$activity_id ,

            ];

                DB::table('days')->insert($data);
            }

        return redirect()->route('activities.index')->with('message','Activity has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('backend.activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        $data = $activity->days;
        return view('backend.activities.edit', compact('activity','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'program' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'price' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'adresse' => 'required',
            'cover' ,

        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = Activity::getCoverPath();
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }else{
            unset($input['cover']);
        }


        $activity->update($input);


        $activity_id = $activity->id;

        if($request->hasfile('images')) {
            $files = $request->file('images');

            foreach($files as $file) {

                $path = 'images/';
                $name = time() . "." . $file->getClientOriginalExtension();
                $file->move($path, $name);

                Image::create([
                    'name' => $name,
                    'path' => '/uploads',
                    'activity_id'=>$activity_id ,
                ]);
            }
        }





        return redirect()->route('activities.index')
            ->with('success', 'Activity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $Activity
     * @return \Illuminate\Http\Response
     *
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->back()
            ->with('success', 'Activity deleted successfully');


    }
    public function deleteimage($id){
        Image::find($id)->delete();
        return back();
    }

    public function deleteday($id){
        Day::find($id)->delete();
        return back();
    }
}
