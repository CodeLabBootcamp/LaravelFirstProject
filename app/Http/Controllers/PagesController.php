<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.home');
    }

    public function getVideo($id = null, $number = null)
    {

        return view('pages.videos', compact('id', 'number'));
    }

    public function getSignup()
    {
        return view('pages.signup');
    }

    public function requestSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required | email',
            'password' => 'required|min:6|max:10',
            're-password' => 'required|same:password',
//            'image'=>'required|mimes:png,jpg,gif|max:50000'
        ]);

        if ($validator->fails())
            return back()->WithErrors($validator->errors()->all())->withInput();

        $request->session()->put('email', $request->email);
        $request->session()->put('password', $request->password);
        $request->session()->put('em', null);

//        return $request->session()->get('em');
//        return $request->session()->all();
        if (Session::exists('em')) {
            return $request->session()->get('email');
        }

        return "Not Has";


    }
}
