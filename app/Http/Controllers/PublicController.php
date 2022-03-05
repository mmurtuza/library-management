<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_of_books = Books::all()->sortBy('created_at')->take(6);
        return view('public.home', compact('list_of_books'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
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
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
}
