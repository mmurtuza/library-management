<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use App\Models\Categories;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //seledt every user from the database
        // $books = Books::all();
        // $books = Books::select('book_id', 'title', 'author', 'description', 'book_categories.category')
        //     ->join('categories', 'books.category_id', '=', 'categories.id')
        //     ->get();
        return view('admin.books.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.books.create', compact('categories'));
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
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|integer',
        ]);
        $imageUrl = str_replace(' ', '-', $request->title) . '-' . time() . '.' . $request->cover->extension();
        $request->cover->move(public_path('images/pruductImage'), $imageUrl);
        try {
            $product = new Books;
            $product->create([
                'title' => $request->title,
                'author' => $request->author,
                'added_by' => auth()->user()->id,
                'category_id' => $request->category_id,
                'description' => $request->description,
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
        $book = Books::where('id', $id)
            ->select([
                'id',
                'title',
                'author',
                'img_url',
                'category_id',
                'description',
                'added_by'
            ])
            ->first();
        $categories = Categories::where('id', $book->category_id)
            ->select([
                'id',
                'name',
            ])->first();
        // return $book;
        return view('admin.books.show', compact('book', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_of_books = Books::where('id', $id)
            ->select([
                'id',
                'title',
                'author',
                'img_url',
                'category_id',
                'description',
                'added_by'
            ])
            ->first();
        $categories = Categories::select([
            'id',
            'name',
        ])->get();
        return view('admin.books.edit', compact('list_of_books', 'categories'));
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
        // return $request;
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|integer',
        ]);


        if ($request->hasFile('image')) {
            $imageUrl = str_replace(' ', '-', $request->name) . '-' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageUrl);
        } else {
            $imageUrl = $request->old_image;
        }

        try {
            $product = Books::findOrFail($id);
            $product->update([
                'title' => $request->title,
                'author' => $request->author,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'image_url' => $imageUrl,
                // 'created_at' => now(),
                // 'updated_at' => now(),
            ]);

            return back()->with('success', 'Product updated successfully');
        } catch (Exception $e) {
            return back()
                ->withInput()
                ->withErrors('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::findOrFail($id);
        $book->delete();
        return back()->with('success', 'book deleted successfully');
    }
}
