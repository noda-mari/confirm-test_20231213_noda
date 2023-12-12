<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;

class UserController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function create(UserRequest $request)
    {
        $user = $request->all();

        User::create($user);

        return redirect('login');
    }

    public function login()
    {
        $contacts = Contact::with('category')->paginate(10);

        $categories = Category::all();

        return view('admin', compact('contacts', 'categories'));
    }

}
