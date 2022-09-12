<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }


    public function import()
    {
        Excel::import(new UsersImport, 'C:/xampp/htdocs/project/excel_mail/users.xlsx');
        return response()->json([
            'status' => 200,
            'message' => 'User Details Imported Successfully.'
        ]);
    }
}
