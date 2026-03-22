<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::with([
            'user',
            'product'
        ])->get();

        $monthlyReports = DB::Table('Reports')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get(); 

        $resolvedReports = DB::table('Reports')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->where('status', 'Resolved')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('layouts.parts.dashboard', compact('reports', 'monthlyReports', 'resolvedReports'));
    }
}
