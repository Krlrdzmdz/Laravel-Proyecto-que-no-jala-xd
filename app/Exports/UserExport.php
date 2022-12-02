<?php

namespace App\Exports;

use App\Models\Candidato;
use App\Models\Vacante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    protected $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        //dd(Candidato::all()->where('vacante_id', $this->id)->load('user'));
        //dd(Vacante::find( $this->id));
        return view('candidatos/template', [
            'candidatos' => Candidato::all()->where('vacante_id', $this->id)->load('user'),
            'vacante' => Vacante::find( $this->id)
        ]);
    }
}
