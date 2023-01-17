<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Activity;
use Illuminate\Http\Request;

class DayController extends Controller
{

    public function store(Request $request)
    {

        $day = new Day;
        $day->title = $request->get('title');
        $day->description = $request->get('description');
        $activity = Activity::find($request->get('activity_id'));
        $activity->days()->save($day);

        return back();
    }

    public function deleteday(Day $day)
    {

        $day->delete();

        return back()
            ->with('success', 'Day deleted successfully');
    }



}
