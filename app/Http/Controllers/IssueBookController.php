<?php

namespace App\Http\Controllers;

use App\Models\BookIssue;
use Illuminate\Http\Request;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.issuebook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function issue()
    {
        return view('admin.issue.issue');
    }

    public function issuestore(Request $request)
    {
        $request->validate([

            's_id' => 'required|string|max:255',
            'book_id' => 'required|string|max:255',
        ]);
        BookIssue::create([
            'student_id' => $request->s_id,
            'book_id' => $request->book_id,
            'added_by' => auth()->user()->id,
            'issue_date' => now(),
            'return_date' => now()->addDays(7),
            'available_status' => '0',

        ]);
        return back()->with('success', 'Book issued successfully');
    }

    public function reissue($id)
    {
        $issue = BookIssue::find($id);
        return back()->with('success', 'Book issued successfully');
    }
}
