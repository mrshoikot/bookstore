<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\Book as BookResource;
use Auth;

class BookController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (0 === strpos($request->headers->get('Accept'), 'application/json'))
        {
            return $this->sendResponse(Book::with('user')->get(), 'Books reterived successfully.');
        }else{
            if($request->search && $request->search != ''){
                $books = Book::where('name', 'like', '%' . $request->search . '%')->get();
            }else{
                $books = Book::all();
            }
            return view('books')->with('books', $books);
        }
    }

    public function dashboard(Request $request) {
        if($request->search && $request->search != ''){
            $books = Book::where('name', 'like', '%' . $request->search . '%')->where('user_id', Auth::id())->get();
        }else{
            $books = Auth::user()->books;
        }
        return view('dashboard')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'writer' => 'required',
            'category' => 'required',
            'type' => 'required',
            'photo' => 'image|max:2048'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $photo = $request->photo;

        if (isset($photo)) {

            // Get Filename with the extension
            $filenameWithExt = $photo->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just extenstion
            $extension = $photo->getClientOriginalExtension();

            if ($extension == '') {
                $extension = 'png';
            }

            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            // Upload Image
            $photo->storeAs('public/photos', $filenameToStore);
            $input['photo'] = $filenameToStore;
        }

        $input['user_id'] = Auth::id();
        $book = Book::create($input);

        if (0 === strpos($request->headers->get('Accept'), 'application/json'))
        {
            return $this->sendResponse($book, 'Book created successfully.');
        }else{
            return redirect('dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book, Request $request)
    {
        if (0 === strpos($request->headers->get('Accept'), 'application/json'))
        {
            return $this->sendResponse($book->with('user')->findOrFail($book->id), 'Book retrieved successfully.');
        }else{
            return view('book', compact('book'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book-edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'writer' => 'required',
            'category' => 'required',
            'type' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $book->update($input);

        return redirect()->route('books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function removeBook($book)
    {
        $book = Book::find($book);
        $book->delete();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $validator = $request->validate([
            'key' => 'required',
        ]);

        $books = Book::where('name', 'like', '%' . $request->key . '%')->with('user')->get();
        return $this->sendResponse($books, 'Book retreaved successfully.');
    }
}
