<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Kolkata');

        // $this->middleware('permission:contact-read', ['only' => ['index', 'show']]);
        // $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function updateOrder(Request $request)
    {
        if ($request->has('ids')) {
            $arr = explode(',', $request->input('ids'));

            foreach ($arr as $sortOrder => $id) {
                $medium = Contact::find($id);
                $medium->sort_id = $sortOrder;
                $medium->save();
            }

            return response()->json(['success' => 'Sorting Order Updated Successfully']);
        }
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        if ($contact->delete()) {
            return redirect()->back()->with('success', 'Contact Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Went Wrong, Contact Deletion Failed !!');
        }
    }
}
