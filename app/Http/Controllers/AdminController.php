<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
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


        return view('admin.students.add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_name' => 'required',
            'parent_name' => 'required',
            'class' => 'required',
            'section' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'age' => 'required',
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
}
