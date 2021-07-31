<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(12);
        return view('backend.admin.team.index',compact('teams'));
    }

    public function create()
    {
        return view('backend.admin.team.add');
    }
    public function view($id)
    {
        $team = Team::find($id);
        return view('backend.admin.team.view',compact('team'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required'],
            'title' => ['required', 'string', 'max:255', 'min:3',],
            'name' => ['required', 'string', 'max:255', 'min:3',],

        ]);
        $file = $request->image;
        $image = time() . $file->getClientOriginalName();
        $file->move('uploads/images', $image);

        $team = new Team();
        $team->name = $request->name;
        $team->title = $request->title;
        $team->avatar = $image;
        $team->fb_link = $request->facebook;
        $team->twitter_link = $request->twitter;
        $team->skype_link = $request->skype;
        $team->pinterest_link = $request->pinterest;
        $team->vimeo_link = $request->vimeo;
        $team->status = $request->status;
        $team->save();
        return response()->json('Team Created Successfully');
    }

    public function update(Request $request,$id)
    {
        $team = Team::find($id);
        if (isset($request->image))
        {
            $file = $request->image;
            $image = time() . $file->getClientOriginalName();
            $file->move('uploads/images', $image);
        }
        else
        {
            $image = $team->avatar;
        }


        $request->validate([
            'title' => ['required', 'string', 'max:255', 'min:3',],
            'name' => ['required', 'string', 'max:255', 'min:3',],
        ]);
        $team->name = $request->name;
        $team->title = $request->title;
        $team->avatar = $image;
        $team->fb_link = $request->facebook;
        $team->twitter_link = $request->twitter;
        $team->skype_link = $request->skype;
        $team->pinterest_link = $request->pinterest;
        $team->vimeo_link = $request->vimeo;
        $team->status = $request->status;
        $team->save();
        return response()->json('Team Update Successfully');
    }


    public function delete(Request $request)
    {
        if ($request->status == 'delete')
        {
            if ($request->ids) {
                foreach ($request->ids as $id) {
                    Team::destroy($id);
                }
                return response()->json('Team Removed');
            }

        }
    }
}
