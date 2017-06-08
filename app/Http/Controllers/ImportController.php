<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ImportController extends Controller
{
    public function index(){
        return view('import.index');
    }

    public function import(Request $request){
        $file = $request->file('dealtracker');
        $filename = \Storage::putFile('temp', new UploadedFile($file->path(), $file->getClientOriginalName()));

        \Excel::selectSheets('Deal Tracker')->load('storage/app/'.$filename)->byConfig('excel::import.sheets', function($sheet){
            dd($sheet->on_site_cc);
        });
    }
}
