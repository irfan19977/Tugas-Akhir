<?php

namespace App\Exports;

use App\Models\PPDB;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportData implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $ppdbs = PPDB::orderBy('nama', 'asc')->get();
        return view('ppdb.table', ['ppdbs'=>$ppdbs]);
    }
}
