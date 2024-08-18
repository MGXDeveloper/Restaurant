<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus=Menu::all();
        return view('Admin.Menu.index',compact('menus'));
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
        $path=$request->file('Image')->storeAs('Menus',$image,'public');
        Menu::create([

            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'cost' => $request->cost,
            'image' => $path

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        if(empty($request->file('Image'))){

            Menu::FindOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $request->type,
                'cost' => $request->cost,
            ]);

            return back();

        }
            
        $menu=Menu::FindOrFail($id);
        
        $image_path='storage/'.$menu->image;
        if(fileExists($image_path)){
            unlink($image_path);
        }
         
        $image=$request->file('Image')->getClientOriginalName();
        $path=$request->file('Image')->storeAs('Menus',$image,'public');

        Menu::FindOrFail($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'cost' => $request->cost,
            'image' => $path
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu=Menu::FindOrFail($id);
        
        $image_path='storage/'.$menu->image;
        if(fileExists($image_path)){
            unlink($image_path);
        }
        else{
            dd("No");
        }
        

        $menu->delete();

        return back();
    }
}
