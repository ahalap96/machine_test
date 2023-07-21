<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use App\Models\Employee;
use App\Models\Complaint;
class Homecontroller extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function adddept()
    {
        return view('adddept');
    }
    public function deptsave()
    {
        Department::create([
            'department'=>request('dept'),
            
        ]);
        return redirect()->route('home');
    }
    public function addemp()
    {
        return view('addemp');
    }
    public function empsave()
    {
       Employee::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'mobile'=>request('mobile'),
            'department'=>request('dept'),
            
        ]);
        return redirect()->route('home');
    }
    public function viewcomplaint()
    {
        $complaint=Complaint::all();
        return view('viewcomplaint',compact('complaint'));
    }
    public function viewksebcmp()
    {
        $complaint=Complaint::where('department','=','kseb');
        // return $complaint;
        return view('viewdeptcmp',compact('complaint'));
    }
    public function viewwatercmp()
    {
        $complaint=Complaint::where('department','=','water authority');
        // return $complaint;
        return view('viewdeptcmp',compact('complaint'));
    }
    public function viewtranscmp()
    {
        $complaint=Complaint::where('department','=','transportation');
        return view('viewdeptcmp',compact('complaint'));
    }
    public function reply($id)
    {
        return view('reply');
    }
    public function replysave()
    {
        $complaint=Complaint::find(request(id));
       $complaint->Update([
         'reply'=>request('reply'),
         'status'=>'2',
       ]);
       return redirect()->route('viewcomplaint');
    }
    public function complaintdept()
    {
        return view('complaintdept');
    }
    public function complaintdate()
    {
        return view('complaintdate');
    }


    public function user()
    {
        return view('user');
    }
    public function ksebcmp()
    {
        return view('addcomplaint');
    }
    public function ksebsave()
    {
       Complaint::create([
            'department'=>'kseb',
            'complaints'=>request('complaint'),
            
        ]);
        return redirect()->route('user');
    }

    public function watercmp()
    {
        return view('cmpwater');
    }
    public function watersave()
    {
       Complaint::create([
            'department'=>'water authority',
            'complaints'=>request('complaint'),
            
        ]);
        return redirect()->route('user');
    }

    public function transcmp()
    {
        return view('cmptransp');
    }
    public function transpsave()
    {
       Complaint::create([
            'department'=>'transportation',
            'complaints'=>request('complaint'),
            
        ]);
        return redirect()->route('user');
    }
    public function userviewcmp()
    {
            $complaint=Complaint::all();
            return view('userviewcmp',compact('complaint'));
        }

        public function update()
        {
            $complaint=Complaint::all();
        return view('updatecmp',compact('complaint'));
        }
        public function pending($id){
            $query=Complaint::find(decrypt($id));
            $query->update([
                'status'=>'1',
            ]);
              return redirect()->route('update');
        }
        
}
