<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\Coursedetails;
use App\Models\Signupcourses;
use Session;
use Illuminate\Http\Request;

class User_controller extends Controller
{
// ----------------------------------------------------REGISTRATION FORM------------------------------------------------------
    public function create()
    {
        return view('registration');
    }
// ----------------------------------------------------REGISTRATION FORM STORING------------------------------------------------------

    public function store(Request $request)
    {
        // VALIDATION 
        $request->validate([
                'firstname'=>'required|alpha',
                'secondname'=>'required',
                'dateofbirth'=>'required',
                'gender'=>'required',
                'email'=>'required|email|unique:Registrations',
                'mobilenumber'=>'required|max:12',
                'country'=>'required',
                'state'=>'required',
                'city'=>'required',
                'hobbies'=>'required'
            ]);


        // STORING REGISTRATION IN DATABASE 
        $path="";
        if($request->photo){
            $path=$request->file('photo')->store('registrationimages','public');
        }

        $regis=new Registration();
        $regis->firstname=$request->firstname;
        $regis->secondname=$request->secondname;
        $regis->gender=$request->gender;
        $regis->dateofbirth=$request->dateofbirth;
        $regis->email=$request->email;
        $regis->mobilenumber=$request->mobilenumber;
        $regis->address=$request->address;
        $regis->country=$request->country;
        $regis->state=$request->state;
        $regis->city=$request->city;
        $regis->hobbies=$request->hobbies;
        $regis->image=$path;

            if ($regis->save()){
                // return redirect('/registration')->with('success','Registration Success');
                return redirect('/login/newuser');
            };   
    }

// ----------------------------------------------------LOGIN CHECKING------------------------------------------------------

    public function success(Request $request)
    {
        $request->validate([
            'loginid'=>'required',
            'password'=>'required'
        ]);
        $email=$request->loginid;
        $password=$request->password;
        $check=Registration::where('email','=',$email)->get()->toarray();
        if(count($check)>0){
            if($check[0]['password']==$password){
                Session::put('UserId',$check[0]['email']);
                if($request->cookie=="on"){
                    setcookie('UserId',$email,time()+600000);
                }
                return redirect('/dashboard');
            }
            else{
                return back()->with('loginerror','Incorrect Password');
            }
        }else{
            return back()->with('loginerror','Incorrect User');
        }
    }

// ----------------------------------------------------DASHBOARD------------------------------------------------------

    public function dashboard(){
        if(Session::has('UserId')){
            $profile=Registration::where('email','=',Session::get('UserId'))->get();
            $id=$profile[0]->id;
            $details=Registration::find($id);

            $allcourse=Coursedetails::latest()->get();

            $course=Signupcourses::where('user_id','=',$id)->get();
            return view('dashboard',['profile'=>$details,'allcourse'=>$allcourse,'signupcourse'=>$course]);
        }
        else{
            return redirect('/login');
        }
    }

// ----------------------------------------------------COURSE SIGNUP------------------------------------------------------


    public function signup($user_id,$course_id)
    {

        // $course=$request->coursepicked;
        $check= Signupcourses::where('user_id','=',$user_id)->get()->toarray();
        foreach ($check as $checks){
            if ($checks['course_id']==$course_id){
                return back()->with('success','User Already Exists');
                // echo "Already Signed Up";
            } 
        }
        $value=1;

        if($value==1){
            $regis=new Signupcourses();
            $regis->user_id=$user_id;
            $regis->course_id=$course_id;

        // $check=Pickedcourses::where('email','=',$loginid)->get();
        // $id=$check[0]->id;
        // $obj=Pickedcourses::find($id);
        // $obj->$course=$request->coursepicked;


            $regis->save();
        }
        return redirect('/dashboard');
    }

// ----------------------------------------------------COURSE REMOVE------------------------------------------------------

    public function remove($id)
    {
        Signupcourses::destroy($id);
        return redirect('/dashboard');
    }

// ----------------------------------------------------REGISTRATION  EDIT------------------------------------------------------

    public function registrationedit($id){
        $obj=Registration::find($id);
        return view('registrationedit',['id'=>$obj]);

    }
// ----------------------------------------------------REGISTRATION EDIT UPDATE------------------------------------------------------

    public function updateregistration(Request $request,$id){

        $path="";
        if($request->photo){
            $path=$request->file('photo')->store('registrationimages','public');
        }


        $regis=Registration::find($id);
        $regis->firstname=$request->firstname;
        $regis->secondname=$request->secondname;
        $regis->gender=$request->gender;
        $regis->dateofbirth=$request->dateofbirth;
        $regis->email=$request->email;
        $regis->mobilenumber=$request->mobilenumber;
        $regis->address=$request->address;
        $regis->country=$request->country;
        $regis->state=$request->state;
        $regis->city=$request->city;
        $regis->hobbies=$request->hobbies;
        if($path){
            $regis->image=$path;
        }
        $regis->save();
        return redirect('/dashboard');

    }

// ----------------------------------------------------PASSWORD CHANGE------------------------------------------------------

    public function changepassword($id){
        $obj=Registration::find($id);
        return view('passwordedit',['id'=>$obj]);
    }

// ----------------------------------------------------PASSWORD UPDATING------------------------------------------------------

    public function updatepassword(Request $request,$id){
        $obj=Registration::find($id);
        $obj->password=$request->newpassword;
        $obj->save();
        return redirect('/dashboard');
    }
    
    
    



// ----------------------------------------------------LOGOUT------------------------------------------------------


    public function logout(){
        Session::flush();
        if(isset($_COOKIE['UserId'])){
            setcookie("UserId",'',time());
        }
        
        return redirect('/');
    }

}

