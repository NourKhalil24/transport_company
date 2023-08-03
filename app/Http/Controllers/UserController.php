<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TypeOfUser;
use Hash;
use Validator;

class UserController extends Controller
{


    public function set_contact(Request $request){
        $data= [];
       $user_id= Auth::user()->id;
        $data['user_id']=$user_id;
        $data["comment"]= $request->input("comment");
        $data["email"]= $request->input("email");
        $id = Contact::create($data)->id;
        return view('home');
    }

    public function index(){
//        $id = Auth::user()->rule;
//        $user = User::where($id,'=',2)->get();
//        $user =User::where('rule','=',1)->get();

        if(!Auth::user()){
            return redirect()->route('login');
        }
        else{
            $data = auth()->user();
            return view("home", compact('data'));

        }
    }
    public function register(Request $request){

        $validateErrors = Validator::make($request->all(),
            [
                'first_name' => 'required|min:3|max:250',
                'email' => 'unique:users|required|email',
                'password' => 'required|confirmed',
            ]);
        if ($validateErrors->fails()) {
            return response()->json(['status' => 201, 'message' => $validateErrors->errors()->first()]);
        }

        $data = [];
        $data["first_name"]= $request->input("first_name");
        $data["middle_name"]= $request->input("middle_name");
        $data["last_name"]= $request->input("last_name");
        $data["birthday"]= $request->input("birthday");
        $data["phone_number"]= $request->input("phone_number");
        $data["email"]= $request->input("email");
        $data["password"]=Hash::make( $request->input("password"));
        $data["user_name"]=$request->input("user_name");
        $data["remember_token"]=random_int(12,45);
        $id = User::create($data)->id;
        // if($id){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

//                return response()->json(['status'=>200,'message'=>"success"]);
                return view('home');
//            return redirect()->route('home');

            }
            else{
                return response()->json(['status'=>401,"success"=>" login failed call administrator"]);
                return redirect('/')->withErrors(["message"=>"failed"]);

            }
        // }

    }

    public function registerform(){
        if(Auth::check()){
            return view('home');
        }else
        {
//            $user_type = TypeOfUser::all();
            return view('register');
        }
    }

    public function login(Request $request){


        $validateErrors = Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required',
                ]
        );
        if ($validateErrors->fails()) {
            return response()->json(['status' => 201, 'success' => $validateErrors->errors()->first()]);
        }

        // $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
//        return $request->all();

        if(Auth::attempt([
            "email"=>$request->email,
            "password"=>$request->password
        ])){
            // $user = User::where("name",'=',$request->name)->first();
            // Auth::login($user);
//            return response()->json(['status'=>200,'message'=>"success"]);
            return view('home');
//            return redirect()->route('welcome');

        }
        else{
            return response()->json(['status'=>201,"success"=>'name or password not correct']);
//            return redirect('/')->withErrors(["message"=>"error"]);

        }

    }

    public function loginform(){

        if(Auth::check()){
            return view('home');
        }else
        {
            return view('login');
        }
    }

    public function logout(){
        auth()->logout();

        session()->flash('message', 'GoodBye');
        return redirect('login');

    }

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // public function handleDeveloper()
    // {
    //     return view('developer');
    // }

}
