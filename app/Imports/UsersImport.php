<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $data = [
            'name' => $row[0],
            'phone' => $row[2]
        ];
        $user['to'] = 'vishnusharma180999@gmail.com';
        Mail::send('mail', $data, function ($messages) use ($user) {
            $messages->to($user['to']);
            $messages->subject('hello');
        });


        return new User([
            'name'     => $row[0],
            'email'    => $row[1],
            'phone'    => $row[2],
        ]);
    }
}
