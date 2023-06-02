<?php

namespace App\Http\Controllers;

use App\Models\Enroler;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function index()
    {   
        $affichage = Enroler::all();
        return view('impression', compact('affichage'));
    }

    public function generatePDF($idenrolant = null)
{
    if ($idenrolant) {
        
        $enrolant = Enroler::where('idenrolant', $idenrolant)->firstOrFail();
        $pdf = \PDF::loadView('template', compact('enrolant'));
        return $pdf->stream('document.pdf');
    } else {
        // Gérer le cas où aucun ID n'est passé
    }
}
        
}
