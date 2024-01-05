<?php
// app/Imports/UsersImport.php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;

class UsersImport implements ToModel
{
    public function model(array $row)
    {
        // Assuming the Excel columns are in the order: full_name, phone_number, email
        return new User([
            'full_name' => $row[0],
            'phone_number' => $row[1],
            'email' => $row[2],
        ]);
    }
}
