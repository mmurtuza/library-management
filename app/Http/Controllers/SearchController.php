<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $books = Books::where('title', 'like', '%' . $request->search . '%')->get();
        // return $books;
        return view('public.search', compact('books'));
    }
}
