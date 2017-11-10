<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pruebas;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App; //App es necesario al momento de usar extesiones para hacer referencias a ellas.

class PruebaextController extends Controller{
    
	public function pruebacarbon(){
    	
    	$date = Carbon::now();
    	return $date;
    }

    public function pruebaexcel(){

    	Excel::create('Laravel Excel', function($excel) {
            
            $excel->sheet('Productos', function($sheet) {
                $products = Pruebas::all();
                $sheet->fromArray($products);
 
            });
        
        })->export('xls');    

    }

    public function pruebapdf(){

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
            return $pdf->stream();
    }

}
