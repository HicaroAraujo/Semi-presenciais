<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Time;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TimeController extends Controller
{
    public function index()
{
    $times = Time::all();
    return view('time.index', compact('times'));
}

public function create()
{
    try
    {
         Gate::authorize('create', Time::class);
    } catch(AuthorizationException $e){
        return redirect()->route('login')->with('error', 'Você não tem permissão para atualizar este post.');
    }
   
    $coaches = Coach::all();
    return view('time.create', compact('coaches'));
}

public function store(Request $request)
{
     $request->validate([
            'name' => 'required',
            'stadium' => 'required',
            'uniform_color'=> 'required',
            'placement'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $time = new Time();
        $time->name = $request->name;
        $time->stadium = $request->stadium;
        $time->uniform_color = $request->uniform_color;
        $time->placement = $request->placement;
        $time->image = 'images/'.$imageName;
        $time->coach_id = $request->coach_id;
        $time->save();
        return redirect('time')->with('success', 'team created successfully.');
       
    
       
}

public function edit($id)
{
    $times = Time::findOrFail($id);
    $coaches = Coach::all();
    return view('time.edit', compact('times', 'coaches'));
}

public function update(Request $request, $id)
{
     
    Gate::authorize('update', Time::class);
    $time = Time::findOrFail($id);
    $time->update($request->all());

        $time->name = $request->name;
        $time->stadium = $request->stadium;
        $time->uniform_color = $request->uniform_color;
        $time->placement = $request->placement;
        
      
        if(!is_null($request->image))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $time->image = 'images/'.$imageName;
        }
       
        $time->save();

    return redirect('time')->with('success', 'Time updated successfully.');
}

public function destroy($id)
{
    Gate::authorize('destroy', Time::class);
    $time = Time::findOrFail($id);
    $time->delete();
    return redirect('time')->with('success', 'Time deleted successfully.');
}
}
