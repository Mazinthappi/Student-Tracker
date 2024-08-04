<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Models\StudentAddress;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage(){
        //$users = Student::where('name','mazin')->get();
        // $users = Student::find(4);
        // $users = Student::where('id',1)->get();
        // $users= student::all();
        $users = Student::latest()->paginate(3);
        return view('students.index',compact('users'));
        
        
    }
    public function Create(){
        return view('students.create');
    }
    public function save(){
        $name = request('name');
        $phone_no = request('phone_no');
        $email = request('email');
        $date_of_birth= request('date_of_birth');
        $status =request('status');

        Student::create([
            'name'=> $name, //'name'=>request('name');
            'phone_no'=>$phone_no,
            'email'=>$email,
            'date_of_birth'=>$date_of_birth,
            'status'=>$status
            
        ]);
        return redirect()->route('home')->with('messages','user created successfully');
        
    }
    public function edit($userId){
        $data= Student::find(decrypt($userId));
        return view('students.edit',compact('data'));
    }
    public function view($userId){
        $data = Student::find(decrypt($userId));
        return view ('students.view',compact('data'));
        // $data= StudentAddress::all();
        // return $data; 




        // try{
        //     $data = Student::find(decrypt($userId));
        //     return view ('students.view',compact('data'));
        // }
        // catch (\Exception $e) {

        //     return $e->getMessage();
        // }
        
        // $address = StudentAddress::find(1);
        // return $address;
    }
   
    public function update(){
        $userId=decrypt(request('id'));
        $data= student::find($userId); // taking the user details for updating 
        $data->update([
            'name'=>request('name'),
            'phone_no'=>request('phone_no'),
            'email'=>request('email'),
            'date_of_birth'=>request('date_of_birth'),
            'status'=>request('status')
        ]);
        //return $data;
        return redirect()->route('home')->with('messages','edited successfully');
    }
    public function delete($userId){
        $deletedt=Student::find(decrypt($userId))->delete();
        return redirect()->route('home')->with('messages','deleted successfully');
    }
    public function trashedData(){
        $users = Student::onlyTrashed()->get();
        return view('students.trashedData',compact('users'));

    }
    public function activate($userId){
        Student::withTrashed()->find(decrypt($userId))->restore();
        return redirect()->route('home');

    }
    public function forceDelete($userId){
        Student::withTrashed()->find(decrypt($userId))->forcedelete();
        return redirect()->route('trashedData.user');
    }
  
    
}
