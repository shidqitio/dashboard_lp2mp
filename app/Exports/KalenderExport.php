<?php

namespace App\Exports;

use App\Kalender;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class KalenderExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('users.admin.kalendertable', [
            'viewall' => Kalender::all()
        ]);
    }
}
