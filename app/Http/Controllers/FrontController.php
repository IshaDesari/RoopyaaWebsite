<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use DB;
use Redirect;

class FrontController extends Controller
{
   public function index(Request $request)
   {
        return view('front.index');
   }

   public function startup(Request $request)
   {
        return view('front.startup');
   }

   public function roopyaatradebizz(Request $request)
   {
        return view('front.roopyaatradebizz');
   }

   public function freebies(Request $request)
   {
        return view('front.freebies');
   }

   public function investor(Request $request)
   {
        return view('front.investor');
   }

   public function itservices(Request $request)
   {
        return view('front.itservices');
   }

   public function capitalraising(Request $request)
   {
        return view('front.capitalraising');
   }

   public function contact(Request $request)
   {
        return view('front.contact');
   }

   public function contact_store(Request $request)
   {
     // dd($request->all());
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'phone' => 'required|max:10',
          'subject' => 'required',
          'message' => 'required'
      ]);

      $input = $request->all();
     //  dd($input);

      Contact::create($input);
      return redirect()->back()->with('success', 'Message Submitted Successfuly');

   }
}
