<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Cinema;
use Illuminate\Support\Facades\Log;
use App\Models\Province;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Cart;




class BookControllerClient extends Controller
{
    //
    public function list()
    {
        $books = Book::all();
        $genres = Genre::all();
        $currentDate = Carbon::now()->format('d/m/Y'); // Lấy ngày hiện tại
        $sevenDaysLater = Carbon::now()->addDays(7)->format('d/m/Y'); // Lấy ngày 7 ngày sau
        return view('client.books.book-list', compact('books', 'genres', 'currentDate', 'sevenDaysLater'));
    }
    public function detail($slug, $id)
    {
        $book = Book::find($id);
        if (auth()->check()) {
            $userID = auth()->user()->id;
            $images = $book->images;

            return view('client.books.book-detail', compact( 'book', 'images'));
        }
        if ($book) {
            return view('client.books.book-detail', compact('book'));
        }
    }

    public function search(Request $request)
    {
        try {
            $query = Book::query();

            if ($request->filled('start_date')) {
                $startDate = $request->input('start_date');
                $startDate = Carbon::createFromFormat('d/m/Y', $startDate)->format('Y-m-d');
                $query->whereDate('start_date', $startDate);
            }

            if ($request->filled('search_query')) {
                $searchQuery = $request->input('search_query');
                $query->where('name', 'like', "%$searchQuery%");
            }

            $movies = $query->get();

            return view('client.movies.partial-movies', compact('movies'));
        } catch (\Exception $e) {
            Log::error('Error during search: ' . $e->getMessage());
            // Xử lý exception ở đây nếu cần
        }
    }


    public function filter(Request $request)
    {
        try {
            $selectedGenres = $request->input('genres');

            $books = Book::whereHas('genres', function ($query) use ($selectedGenres) {
                $query->whereIn('genre_id', $selectedGenres);
            })->select('id', 'name', 'poster')->get();

            return view('client.movies.partial-movies', compact('books'));
        } catch (\Exception $e) {
            Log::error('Lỗi trong quá trình lọc: ' . $e->getMessage());
            // Xử lý exception ở đây
        }
    }

    // app/Http/Controllers/Client/BookControllerClient.php


// ... (other imports)



    public function addToCart(Request $request, $id)
    {
        $user = auth()->user();

        // Check if the book is already in the cart for the user
        $cartItem = Cart::where('user_id', $user->id)
            ->where('book_id', $id)
            ->first();

        if ($cartItem) {
            // If the book is already in the cart, update the quantity
            $cartItem->increment('quantity');
        } else {
            // If the book is not in the cart, create a new cart item
            Cart::create([
                'user_id' => $user->id,
                'book_id' => $id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart.view')->with('success', 'Book added to cart successfully.');
    }

    public function viewCart()
    {
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('book')->get();

        return view('client.cart.view', compact('cartItems'));
    }

    

}
