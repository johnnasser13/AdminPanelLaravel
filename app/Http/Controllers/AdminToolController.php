<?php
/// app/Http/Controllers/AdminToolController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;  // Import your UsersImport class
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;  // Assuming you have a User model
use App\Exports\UsersExport;


class AdminToolController extends Controller
{
    public function index()
    {
        $users = User::all();  // You may fetch users from the database as needed
        return view('admin.users.index', compact('users'));
    }

    public function importForm()
    {
        return view('admin.import');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');

        Excel::import(new UsersImport, $file);

        return redirect()->route('admin.dashboard')->with('success', 'Data imported successfully.');
    }

    public function exportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
