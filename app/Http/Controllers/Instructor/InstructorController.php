<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;

class InstructorController extends Controller
{
    //
    public function create()
    {
        return view('backend.admin.pages.instructor.create');
    }

    public function index()
    {
        $instructors = Instructor::all();
        return view('backend.admin.pages.instructor.index', compact('instructors'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'nullable|unique:instructors,email',
            'password' => 'nullable|string',
            'field' => 'required|string',
            'study' => 'required|in:full_time,part_time',
            'location' => 'required|string',
            'photo' => 'nullable|string'
        ]);

        $data = $request->all();
        // return $data;
        $status = Instructor::create($data);
        if($status){
            return redirect()->route('admin.instructor.index')->with('success', 'Successfully created instructor');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $instructor = Instructor::find($id);
        return view('backend.admin.pages.instructor.edit', compact('instructor'));
    }

    public function update(Request $request, $id)
    {
        $instructor = Instructor::find($id);
        if($instructor){
            $this->validate($request, [
                'name' => 'required|string',
                'phone' => 'required|numeric',
                'email' => 'nullable|unique:instructors,email',
                'password' => 'nullable|string',
                'field' => 'required|string',
                'study' => 'required|in:full_time,part_time',
                'location' => 'required|string',
                'photo' => 'nullable|string'
            ]);
    
            $data = $request->all();
            // return $data;
            $status = $instructor->fill($data)->save();
            if($status){
                return redirect()->route('admin.instructor.index')->with('success', 'Successfully updated instructor');
            }else{
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return "Data not found";
        }

    }

    public function destroy($id)
    {
        $instructor = Instructor::find($id);

        if($instructor){
            $status = $instructor->delete();
            if($status){
                return redirect()->route('admin.instructor.index')->with('success', 'Successfully deleted instructor');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return back()->with('error', 'Data not found');
        }
    }
}
