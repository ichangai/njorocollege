<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function create()
    {
        return view('backend.admin.pages.department.create');
    }

    public function index()
    {
        $departments = Department::all();
        return view('backend.admin.pages.department.index', compact('departments'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'photo' => 'nullable|string',
            'description' => 'required|string'
        ]);

        $data = $request->all();
        // return $data;
        $status = Department::create($data);
        if($status){
            return redirect()->route('admin.department.index')->with('success', 'Successfully added department');
        }
        else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $dep = Department::find($id);
        if($dep){
            return view('backend.admin.pages.department.edit', compact('dep'));
        }else{
            return "Data not found";
        }
    }

    public function update(Request $request, $id)
    {
        $dep = Department::find($id);

        if($dep){
            $this->validate($request, [
                'name' => 'required|string',
                'photo' => 'nullable|string',
                'description' => 'required|string'
            ]);
            
            $data = $request->all();
            // return $data;
            $status = $dep->fill($data)->save();
            if($status){
                return redirect()->route('admin.department.index')->with('success', 'Successfully added department');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return "Data not found";
        }
    }

    public function destroy($id)
    {
        $dep = Department::find($id);

        if($dep){
            $status = $dep->delete();
            if($status){
                return redirect()->route('admin.department.index')->with('success', 'Successfully deleted department');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return back()->with('error', 'Data not found');
        }
    }
}
