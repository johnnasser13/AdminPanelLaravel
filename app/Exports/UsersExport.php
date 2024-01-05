<?php
// app/Exports/UsersExport.php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;

class UsersExport implements FromCollection
{
    public function collection()
    {
        // Fetch all users from the database
        return User::all();
    }
}
