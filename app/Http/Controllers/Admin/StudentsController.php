<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'name' => 'required|string|max:255',
            'id' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $imageUrl = str_replace(' ', '-', $request->id) . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/students/'), $imageUrl);
        try {
            $product = new Student();
            $product->create([
                'name' => $request->name,
                'student_id' => $request->id,
                'year' => now()->year,
                // 'added_by' => auth()->user()->id,
                'department' => $request->department,
                'email_id' => $request->email,
                'semester' => $request->semester,
                'branch' => $request->branch,
                'img_url' => $imageUrl,
            ]);

            return back()->with('success', 'Product added successfully');
        } catch (Exception $e) {
            return back()
                ->withInput()
                ->withErrors('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Student::find($id);
        return view('admin.students.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
