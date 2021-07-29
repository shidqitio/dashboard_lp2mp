<?php

namespace App\Exports;
use App\Jadwal;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class JadwalExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('users.admin.jadwal.table', [
            'jadwal' => Jadwal::all()
        ]);
    }
}
