<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::select(['name', 'email', 'phone'])->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone'
        ];
    }
}
