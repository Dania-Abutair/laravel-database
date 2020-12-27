<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function validation(Request $request){
    
        $request->validate([
            'fullname'=>array('required','regex:/^([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+\s+([A-Za-z]{3,})+$/'),
            'national_id'=>'required|numeric|digits:10',
            'email'=>'required|email',
            'address' =>'required',
           'mobile'=>'required',
           
           
          ]);
          
          
     }
    public function create()
    {
        $all_users=User::all();

        return view('/students',compact('all_users'));
    }

    public function admin()
    {
        $all_traniee=User::all();

        return view('/admin',compact('all_traniee'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation( $request);
        if ($request->hasFile('image')) {
            $file=$request-> image -> getClientOriginalExtension();
            $file_name=time().'.'.$file;
            $path='images';
            $request-> image ->move($path,$file_name);
            }
            else{
                $file_name="default.png";
            }
            
        User::create([
            
            'fullname'=>$request['fullname'],
            'email'=>$request['email'],
            'national_id'=>$request['national_id'],
            'mobile'=>$request['mobile'],
            'address'=>$request['address'],
            'image'=>$file_name,
            
            
        ]);

        return redirect('students');

    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=User::where('id',$id)->get()->first();
        return $student;
    }

    public function profileView($id){

        $student=$this->show($id);
        return view('profile',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validation( $request);
        if ($request->hasFile('image')) {
        $file=$request-> image -> getClientOriginalExtension();
        $file_name=time().'.'.$file;
        $path='images';
        $request-> image ->move($path,$file_name);
        }
        

         else {
            $file_name = User::find($id)->image;
            
        }
        User::where("id",$id)->update([
            'fullname' => $request['fullname'],
            'national_id' => $request['national_id'],
            'email'    => $request['email'],
            'mobile'   => $request['mobile'],
            'address' => $request['address'],
            'image'   =>$file_name,

            ]) ;
            return redirect('/admin');  
    

    }
    public function updateView($id){

        $student=$this->show($id);
        return view('edit',compact('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id=User::where('id',$id)->delete();
        $all_traniee=User::all();
        return redirect('/admin');

    }
}
