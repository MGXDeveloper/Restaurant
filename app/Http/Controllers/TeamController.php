<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\fileExists;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=Team::all();

        return view('Admin.Team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image=$request->file('Image')->getClientOriginalName();
        $path=$request->file('Image')->storeAs('Teams',$image,'public');
        Team::create([

            'name' => $request->name,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'image' => $path

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team=Team::FindOrFail($id);
        return view('Admin.Team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        if(empty($request->file('Image'))){

            Team::FindOrFail($id)->update([
                'name' => $request->name,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter
            ]);

            return back();

        }

        $team=Team::FindOrFail($id);

        $image_path='storage/'.$team->image;
        if(fileExists($image_path)){
            unlink($image_path);
        }

        $image=$request->file('Image')->getClientOriginalName();
        $path=$request->file('Image')->storeAs('Teams',$image,'public');

        Team::FindOrFail($id)->update([
            'name' => $request->name,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'image' => $path
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team=Team::FindOrFail($id);

        $image_path='storage/'.$team->image;
        if(fileExists($image_path)){
            unlink($image_path);
        }
        else{
            dd("No");
        }


        $team->delete();

        return back();
    }
}
