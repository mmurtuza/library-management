<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use App\Mail\DemoMail;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Books::select('author')->distinct()->take(10)->get();
        $categories = Categories::select('name')->take(10)->get();
        $list_of_books = Books::all()->sortBy('created_at')->take(6);
        return view('public.home', compact('list_of_books', 'authors', 'categories'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function single_book($id)
    {
        $book = Books::query()
            ->join('categories', 'books.category_id', '=', 'categories.id')
            ->select('books.*', 'categories.name as category_name')
            ->findOrFail($id);
        $authors = Books::select('author')->distinct()->take(10)->get();
        $categories = Categories::select('id', 'name')->take(10)->get();
        return view('public.show', compact('book', 'authors', 'categories'));
    }

    public static function send(Request $request)
    {
        /* $data = $request->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to($request->user())->send(new DemoMail($data)); */
        try {

            $basic  = new \Nexmo\Client\Credentials\Basic(env("NEXMO_KEY"), env("NEXMO_SECRET"));
            $client = new \Nexmo\Client($basic);

            $receiverNumber = "8801706103857";
            $message = "Your book is issued";

            $message = $client->message()->send([
                'to' => $receiverNumber,
                'from' => 'Vonage APIs',
                'text' => $message
            ]);

            dd('SMS Sent Successfully.');
        } catch (Throwable $e) {
            dd("Error: " . $e->getMessage());
        }
    }

    public function author($id)
    {
        $author = Books::select('author')->distinct()->where('author', 'like', '%' . $id . '%')->get();
        $list_of_books = Books::where('author', 'like', '%' . $id . '%')->get();
        return view('public.search', compact('list_of_books', 'author'));
    }

    public function categories($id)
    {
        $categories = Categories::select('name')->where('name', 'like', '%' . $id . '%')->get();
        $list_of_books = Books::where('category', 'like', '%' . $id . '%')->get();
        return view('public.search', compact('list_of_books', 'categories'));
    }

    public function authorAll()
    {
        $authors = Books::select('author')->distinct()->get();
        return view('public.search', compact('authors'));
    }

    public function categoriesAll()
    {
        $categories = Categories::select('id', 'name')->get();
        return view('public.search', compact('categories'));
    }
}
