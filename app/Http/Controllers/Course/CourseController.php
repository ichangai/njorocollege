<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Models\Instructor;

class CourseController extends Controller
{
    public function create()
    {
        $departments = Department::all();
        $instructors = Instructor::all();
        return view('backend.admin.pages.courses.create', compact('departments', 'instructors'));
    }

    public function index()
    {
        $courses = Course::all();
        return view('backend.admin.pages.courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // return $data;

        $this->validate($request, [
            'name' => 'required|string',
            'instructor_id' => 'nullable|string',
            'dep_id' => 'nullable|string',
            'desc' => 'nullable|string',
            'grade_cert' => 'nullable|string',
            'grade_dip' => 'nullable|string',
            'entry' => 'nullable|string',
            'exam' => 'required|in:KNEC,NITA,C&G',
            'photo' => 'nullable|string',
            'duration' => 'nullable|string',
        ]);

        $data = $request->all();
        // return $data;
        $status = Course::create($data);
        if($status){
            return redirect()->route('admin.course.index')->with('success', 'Successfully added course');
        }
        else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $dep = Course::find($id);
        if($dep){
            return view('backend.admin.pages.department.edit', compact('dep'));
        }else{
            return "Data not found";
        }
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);

        if($course){
            $this->validate($request, [
                'name' => 'required|string',
                'instructor_id' => 'nullable|string',
                'dep_id' => 'nullable|string',
                'desc' => 'nullable|string',
                'grade_cert' => 'nullable|string',
                'grade_dip' => 'nullable|string',
                'entry' => 'nullable|string',
                'exam' => 'required|in:KNEC,NITA,C&G',
                'photo' => 'nullable|string',
                'duration' => 'nullable|string',
            ]);
            
            $data = $request->all();
            // return $data;
            $status = $course->fill($data)->save();
            if($status){
                return redirect()->route('admin.course.index')->with('success', 'Successfully added course');
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
        $course = Course::find($id);

        if($course){
            $status = $course->delete();
            if($status){
                return redirect()->route('admin.course.index')->with('success', 'Successfully deleted course');
            }
            else{
                return back()->with('error', 'Something went wrong');
            }
        }else{
            return back()->with('error', 'Data not found');
        }
    }
}
