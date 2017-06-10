<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{
    public function upload()
    {
    	return view('upload');
    }

    public function ImportContratos()
    {
    	$file = Input::file('file');
    	$file_name = $file->getClientOriginalName();
    	$file->move('files', $file_name);
    	
    	$results = Excel::load('files/'.$file_name, function($reader)
    	{
    		$reader->all()->setActiveSheetIndex(0);

    	})->all();
    	dd($results);
    	return view('contratos',['contratos' => $results]);
    }
}
