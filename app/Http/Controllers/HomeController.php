<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Models\Appointment;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==0)
            {
                $doctor = Doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }


    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctor = Doctor::all();
            return view('user.home',compact('doctor'));
        }
    }

    public function myAppointment()
    {  
        if(Auth::id())
        {
            $userId = Auth::user()->id;
            $appointment = appointment::where('user_id',$userId)->get();
            return view('user.myAppointment',compact('appointment'));
        }
        else{
            return redirect()->back();
        }
    }

    
    //########################## Cancle Appointment ###########################

    public function cencleAppontment($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();

    }
}
