<?php

namespace App\Exports;

use App\Models\Vacante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('candidatos.index', [
            'vacante' => Vacante::all()
        ]);
    }
}
