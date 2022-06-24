<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use  App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'stud_id'=>'required|unique:users',
            'lastName'=>'required',
            'firstName'=>'required',
            'mi'=>'required',
            'course'=>'required',
            'yearLevel'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new User();
        $user->stud_id = $request->stud_id;
        $user->lastName = $request->lastName;
        $user->firstName = $request->firstName;
        $user->mi = $request->mi;
        $user->course = $request->course;
        $user->yearLevel = $request->yearLevel;
        $user->STATUS = 'Active';
        $user->userLevel ='User';
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('fail', 'Something wrong!'); 
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'stud_id'=>'required',
            'password'=>'required|min:5|max:12'
        ]);
        $user = User::where('stud_id','=',$request->stud_id)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password Incorrect');
            }
        } else {
            return back()->with('fail', 'This User ID is not registered ');
        }
    }

    public function dashboard(){
         $data = User::where('STATUS', 'Active')
         ->orWhere('STATUS', 'Updated')
         ->get();
         return view('dashboard',['users'=>$data]);
            }

    public function editDatabase(){
        $data = User::all();
        return view('editDatabase',['users'=>$data]);
    }

    public function logout(){
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect ('/');
        }
    }

    function delete($id){
        $data=User::find($id);
        $data->STATUS='Deleted';
        $data->save();
        //$data->delete();
        return redirect ('dashboard');
    }

    function showData($id){
        $data = User::find($id);
        return view('edit', ['data'=>$data]); 
    }
    
    function update(Request $request){
        $data=User::find($request->id);
        $data->stud_id=$request->stud_id;
        $data->lastName=$request->lastName;
        $data->firstName=$request->firstName;
        $data->mi=$request->mi;
        $data->course=$request->course;
        $data->yearLevel=$request->yearLevel;
        $data->STATUS='Updated';
        $data->save();
        return redirect('dashboard');
    }
}
