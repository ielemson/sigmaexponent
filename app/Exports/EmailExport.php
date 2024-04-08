<?php

namespace App\Exports;

use App\Models\NewsLetter;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings():array{
        return[
            'id',
            'Email'
        ];
    } 

    public function collection()
    {
        
        return NewsLetter::all();
    }
}
