<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class CandidatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vacante $vacante)
    {
        return view('candidatos.index', [
            'vacante' =>$vacante
        ]);
    }

    public function export()
    {
        return Excel::download(new UserExport, 'candidatos.xlsx');
    }

}
