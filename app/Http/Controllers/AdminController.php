<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addDoc()
    {
        return view('admin.addDoc');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;

        $image = $request->img;
        $imagName = time().'.'.$image->getClientoriginalExtension();
        $request->img->move('doctorImg',$imagName);

        $doctor->image = $imagName;

        $doctor->name = $request->dName;
        $doctor->phone = $request->dphone;
        $doctor->room = $request->room;
        $doctor->specification = $request->specification;

        $doctor ->save();
        return redirect()->back()->with('msg','Doctor added succeccfully...');
    }


    //########################## Appointment ###########################
    public function appointment(Request $request)
    {
        $appointment = new Appointment;

        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->date = $request->date;
        $appointment->doctor = $request->doctor;
        $appointment->phone = $request->number;
        $appointment->message = $request->message;
        $appointment->status = 'In Progress';
      if(Auth::id())
      {
          $appointment->user_id = Auth::user()->id;
      }
        $appointment->save();
        return redirect()->back()->with('msg','Your request is successfully sent. We will contact you very soon');
    }

    public function adminAppointment()
    {
         $data = appointment::all();
        return view('admin.adminAppointment_View',compact('data'));
    }

    public function approveByAdmin($id)
    {
        $data = appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancleByAdmin($id)
    {
        $data = appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
    }

    public function allDoc()
    {
        $data = doctor::all();
        return view('admin.allDoctor',compact('data'));
    }

    // send mail from appointment
    public function sendMail($id)
    {
        $data= appointment::find($id);
        return view('admin.sendMail',compact('data'));
    }
    public function send(Request $request,$id)
    {
        // $data = appointment::find($id);
        // $details=[
        //    'greeting'=$request->greet,
        //    'body'=$request->body;

        // ];
    }

    //del doc
    public function deleteDoc($id)
    {
        $deleteDoc = Doctor::find($id);
        $deleteDoc->delete();
        return redirect()->back();
    }
    //update and edit Doc
    public function updateDoc($id)
    {
        $data = Doctor::find($id);
        return view('admin.updateDoc',compact('data'));
    }

    public function editDoc(Request $request,$id)
    {
        $data = doctor::find($id);
        $data->name = $request->dName;
        $data->phone = $request->dphone;
        $data->room = $request->room;
        $data->specification = $request->specification;

        $image = $request->img;
        $imagName = time().'.'.$image->getClientoriginalExtension();
        $request->img->move('doctorImg',$imagName);

        $data->image = $imagName;

        $data->save();
        return redirect('/all_doc');


    }
}
