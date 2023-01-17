<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use App\Models\City;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdventureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adventures = Adventure::latest()->simplepaginate(5);

        return view('backend.adventures.index',compact('adventures'))
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
        return view('backend.adventures.create', compact('cities', $cities));
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
            'small_description' => 'required',
            'description' => 'required',
            'location' => 'required',
            'price' => 'required',
            'stardate' => 'required',
            'enddate' => 'required',
            'level' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = Adventure::getCoverPath();
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }

        $adventure= Adventure::create($input);

        $adventure_id = $adventure->id;

        if($request->hasfile('images')) {
            $files = $request->file('images');

            foreach($files as $file) {

                $path = 'images/';
                $name = time() . "." . $file->getClientOriginalExtension();
                $file->move($path, $name);

                Image::create([
                    'name' => $name,
                    'path' => '/uploads',
                    'adventure_id'=>$adventure_id ,
                ]);
            }
        }
        foreach ( $request->day_title as $day=>$insert) {

            $data =[
                'day_title' =>$request->day_title[$day],
                'day_description' =>$request->day_description[$day],
                'image' =>$request->image[$day]->store('uploads/days/'),
                'adventure_id'=>$adventure_id,

            ];

            DB::table('days')->insert($data);
        }

        return redirect()->route('adventures.index')->with('success','Adventure has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Adventure $adventure)
    {
        return view('backend.adventures.show', compact('adventure'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Adventure $adventure)
    {
        $image = $adventure->images;
        $data = $adventure->days;
        return view('backend.adventures.edit', compact('adventure','data','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adventure $adventure)
    {
        $request->validate([
            'title' => 'required',
            'small_description' => 'required',
            'description' => 'required',
            'location' => 'required',
            'price' => 'required',
            'stardate' => 'required',
            'enddate' => 'required',
            'level' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('cover')) {
            $destinationPath = Adventure::getCoverPath();
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['cover'] = "$profileImage";
        }else{
            unset($input['cover']);
        }

        $adventure->update($input);

        return redirect()->route('adventures.index')
            ->with('success','Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adventure $adventure)
    {
        $adventure->delete();
        return redirect()->back()->with('success', 'Adventure deleted succesfully');
    }
}
