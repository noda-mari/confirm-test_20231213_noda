<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index',compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        unset($contact['_token']);

        $category = Category::find($request->category_id)->first();

        return view('confirm',compact('contact','category'));
    }

    public function create(Request $request)
    {
        if ($request->input('back') == 'back') {
            return redirect('/')
            ->withInput();
        }

        $contact = $request->all();
        unset($contact['_token']);

        Contact::create($contact);

        return view('thanks');
    }


    public function search(Request $request)
    {
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->DateSearch($request->date)->paginate(10);

        $categories = Category::all();

        return view('admin',compact('contacts','categories'));
    }
}
