<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use App\Exports\UserExport;
use Faker\Core\Number;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;



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

    public function export($vacante)
    {
        //dd($vacante);
        return Excel::download(new UserExport($vacante), 'candidatos.xlsx');
    }

    
    public function exportPDF($vacante)
    {   
        $pdf = PDF::loadView('template');
        return $pdf->download('candidatos.pdf');    
    }


}
