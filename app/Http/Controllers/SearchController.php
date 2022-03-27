<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $list_of_books = Books::query()
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('author', 'like', '%' . $search . '%')
            ->orWhere('categories.name', 'like', '%' . $search . '%')
            ->get();
        $authors = Books::select('author')->distinct()->take(10)->get();
        $categories = Categories::select('id', 'name')->take(10)->get();
        return view('public.search', compact('list_of_books', 'authors', 'categories'));
        /* $authors = Books::select('author')->distinct()->take(10)->get();
        $categories = Categories::select('name')->take(10)->get();
        $list_of_books = Books::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('author', 'like', '%' . $request->search . '%')->get();

        return view('public.search', compact('list_of_books', 'authors', 'categories')); */
    }
}
