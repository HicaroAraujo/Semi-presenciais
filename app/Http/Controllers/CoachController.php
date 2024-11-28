<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();
        return view('coaches.index', compact('coaches'));
    }
    
    public function create()
    {
        return view('coaches.create');
    }
    
    public function store(Request $request)
    {
         $request->validate([
                'name' => 'required',
                'age' => 'required',
                'city'=> 'required',
                
            ]);
    
            $coach = new Coach();
            $coach->name = $request->name;
            $coach->age = $request->age;
            $coach->city = $request->city;
            $coach->save();
            return redirect('coaches')->with('success', 'team created successfully.');
           
        
           
    }
    
    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coaches.edit', compact('coach'));
    }
    
    public function update(Request $request, $id)
    {
        $coach= Coach::findOrFail($id);
    
            $coach->name = $request->name;
            $coach->age = $request->age;
            $coach->city = $request->city;
           
            $coach->save();
    
        return redirect('coaches')->with('success', 'Coach updated successfully.');
    }
    
    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();
        return redirect('coaches')->with('success', 'Coach deleted successfully.');
    }
}
