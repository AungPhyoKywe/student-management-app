<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\RoleUser;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher=Auth::User()->where('id','!=','1')->get();
       
        return view('backend.teacher.show',['user'=>$teacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required|max:255',
            'dob'=>'required',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|same:confirm-password|max:255',
            'phone' => 'required',
            'address'=>'required',
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->age=$request->age;
        $user->gender=$request->gender;
        $user->DOB=$request->dob;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->ph_no=$request->phone;
        $user->address=$request->address;
        

        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/teacher/', $filename);
            $user->profile_image=$filename;
        }else{
           $filename='teacher.png';
           $user->profile_image=$filename;
        }
        
        
        $user->save();
        $role = new RoleUser();
        $role->user_id=$user->id;
        $role->role_id='2';
        $role->save();
        //dd($request->all());
        return  redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::where('id',$id)->get();
        return view('backend.teacher.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id."|max:255",
            'password' => 'required|same:confirm-password|max:255',
            'phone' => 'required',
            'address'=>'required',
        ]);
        $user=User::find($id);
        $user->name=$request->name;
        $user->age=$request->age;
        $user->gender=$request->gender;
        $user->DOB=$request->dob;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->ph_no=$request->phone;
        $user->address=$request->address;
        //$user->role='teacher';
        $filename=$user->profile_image;
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/teacher/', $filename);
        }
        $user->profile_image=$filename;
        $user->save();

        return  redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=new User();
        $user->where('id',$id)->delete();
        return redirect('/teacher');
    }
}
