<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use DateTime;

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

    public function getBlogs()
    {
//        return DB::table('blogs')->where('id','!=',4)->Orwhere('title','like','%blog%')->get();
//        return DB::table('blogs')->select(DB::raw('count(*) as t_count'))->get();
//        $db = DB::table('blogs')
//                ->insert([
//                        'title'=>"Hello This is new blog",
//                        'content'=>'new new',
//                          'user_id'=>2,
//                        'created_at'=>new DateTime,
//                        'updated_at'=>new DateTime
//                        ]);
//        if($db)
//            return "Inserted";

//        $db = DB::table('blogs')->whereIn('id',[13,14,15])
//            ->update(['title'=>"Hello",'content'=>'fawfaewfa','user_id'=>2]);
//
//        if($db)
//            return "Updated";

//        DB::table('blogs')->where(['id'=>13])->delete();

        $blogs = DB::table('blogs')
                    ->join('users','blogs.user_id','=','users.id')
                    ->select('blogs.*','users.name as username')
                    ->paginate(10);

        return view('pages.table',compact('blogs'));


    }
}
