<?php

namespace App\Http\Controllers;

use App\Exports\ConsumptionExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function itemConsumption()
    {
        return Excel::download(new ConsumptionExport, 'Consumption.xlsx');
    }

}
