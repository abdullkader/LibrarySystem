<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $books = Book::all();
    $categories = Category::all();
    $users = User::all();
    return view('admin.dashboard', compact('books', 'categories','users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function createUser()
    {
        return view('admin.create-user');
    }

    /**
     * Store a newly created user in storage.
     */
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required'
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        return redirect()->route('admin.createUser')->with('success', 'User created successfully!');
    }

    /**
     * Show the form for creating a new book.
     */
    public function createBook()
    {
        // return view('admin.create-book');
        $categories = Category::all();
        return view('admin.create-book', compact('categories'));
    }

    /**
     * Store a newly created book in storage.
     */
    public function storeBook(Request $request)

    {    $validatedData = $request->validate([
        'title' => 'required|string|max:255|min:10',
        'author' => 'required|string|max:255|min:5',
        'description' => 'required|min:20',
        'categories' => 'array|exists:categories,id'
    ]);

    $book = Book::create([
        'title' => $validatedData['title'],
        'author' => $validatedData['author'],
        'description' => $validatedData['description'],
        'is_available' => true,
    ]);

    $book->categories()->sync($request->categories);

    return redirect()->route('admin.createBook')->with('success', 'Book added successfully!');
}


    public function selectBook($id)
    {
        $book = Book::find($id);

        if ($book && $book->is_available) {
            return redirect()->back()->with('success', 'Book selected successfully!');
        }

        return redirect()->back()->with('error', 'Book is not available.');

    }
    public function select($id)
    {
        $book = Book::findOrFail($id);
        $book->is_available = false;
        $book->save();

        return redirect()->back()->with('success', 'The book is now marked as unavailable.');
    }

}

