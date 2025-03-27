<?php

namespace App\Http\Controllers;

use App\Models\RollNumber;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function uthcheck(Request $request)
    {
        $request->validate([
            'email',
            'password'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admins.dashboard')->with('succes', 'You have success fully loggedin');
            } elseif ($user->role === 'parent') {
                return redirect()->route('admins.studentindex')->with('succes', 'You have success fully loggedin');
            } else {
                return redirect()->route('admins.login')->with('error', 'Unauthorize access');
            }
        }

        return back()->with('error', 'Access Denied');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function subject()
    {
        return view('admin.students.subject');
    }
    public function index()
    {
        return view('admin.students.index');
    }
    public function show()
    {
        return view('admin.students.show');
    }

    public function edit()
    {
        return view('admin.students.edit');
    }
    public function update() {}

    public function create(Request $request)
    {
        $roll_numbers = RollNumber::all();
        return view('admin.students.add',[
            'roll_numbers' => $roll_numbers,
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'image' => 'nullable|nullable',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'gender' => 'required',
        ]);
        Student::create($validated);
        return redirect()->route('admins.studentindex')->with('success', 'student added succesfully');
    }
    public function login()
    {
        return view('admin.login');
    }
    // public function uthcheck(Request $request)
    // {
    //     $validated = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt($validated)) {

    //         $user = Auth::user();
    //         switch ($user->role) {
    //             case 'admin':
    //                 return redirect()->route('admins.dashboard');
    //             case 'teacher':
    //                 return redirect()->route('admins.studentindex');
    //             case 'parent':
    //                 return redirect()->route('admins.studentcreate');
    //             default:
    //                 return redirect()->route('admins.login')->with('error', 'Your are not authorise to access this page');
    //         }
    //     }
    //     return redirect()->route('admins.login')->with('error', 'Invalid credentials');
    // }



    // Student Roll

    public function rollIndex()
    {
        $rolls = RollNumber::all();
        return view(
            'admin.students.roll.index',
            [
                'rolls' => $rolls,
            ]

        );
    }
    public function rollStore(Request $request)
    {
        $request->validate([
            'roll_no' => 'required|unique:roll_numbers',
        ]);
        RollNumber::create(['roll_no' => $request->roll_no]);
        return redirect()->route('admins.rolllist')->with('success', 'Roll Created successfully');
    }
    public function rollCreate()
    {
        return view('admin.students.roll.add');
    }

    public function rollEdit(Request $request, $id)
    {
        $roll = RollNumber::findOrFail($id);
        return view('admin.students.roll.edit', [
            'roll' => $roll,
        ]);
    }
    public function rollUpdate(Request $request, $id)
    {
        $request->validate([
            'roll_no' => 'required|unique:roll_numbers,roll_no,' . $id,
        ]);
        $roll = RollNumber::findOrFail($id);
        $roll->update([
            'roll_no' => $request->roll_no,
        ]);
        return redirect()->route('admins.rolllist')->with('success', 'Role No update Successfully');
    }
}
