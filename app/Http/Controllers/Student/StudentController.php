<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('backend.admin.pages.students.create');
    }

    public function index()
    {
        $students = Student::all();
        return view('backend.admin.pages.students.index', compact('students'));
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // return $data;
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|unique:students,email',
            'password' => 'nullable|string',
            'dob' => 'required|date',
            'marital' => 'required|string',
            'secondary' => 'required|string',
            'field' => 'required|string',
            'study' => 'required|in:part_time,full_time',
            'country' => 'required|string',
            'location' => 'required|string',
        ]);

        $data = $request->all();
        // return $data;
        $status = Student::create($data);
        if($status){
            return redirect()->route('admin.student.index')->with('success', 'Successfully created student');
        }
        else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $student = Student::findorFail($id);

        if($student){
            return view('backend.admin.pages.students.edit', compact('student'));
        }
    }

    public function update(Request $request, $id)
    {
            $student = Student::findorFail($id);

            if($student){
                $this->validate($request, [
                    'name' => 'required|string',
                    'phone' => 'required|string',
                    'email' => 'nullable',
                    'password' => 'nullable|string',
                    'dob' => 'required|date',
                    'marital' => 'required|string',
                    'secondary' => 'required|string',
                    'field' => 'required|string',
                    'study' => 'required|in:part_time,full_time',
                    'country' => 'required|string',
                    'location' => 'required|string',
                ]);
        
                $data = $request->all();
                // return $data;
                $status = $student->fill($data)->save();
                if($status){
                    return redirect()->route('admin.student.index')->with('success', 'Successfully updated student');
                }
                else{
                    return back()->with('error', 'Something went wrong');
                }
            }else{
                throw new \Exception('Data not found');
            }
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if($student){
            $status = $student->delete();
            if($status){
                return redirect()->route('admin.student.index')->with('success', 'Successfully deleted student');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return back()->with('error', 'Data not found');
        }
    }
}
