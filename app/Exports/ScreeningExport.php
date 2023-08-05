<?php

namespace App\Exports;

use App\Models\Screening;
use App\Models\QuestionGroup;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromView;

class ScreeningExport implements FromView
{
    public $month, $year, $search;
    public function __construct($search, $month, $year)
    {
        $this->month = $month;
        $this->year = $year;
        $this->search = $search;
    }

    public function view(): View
    {

        return view('admin.export_screening', [
            'screening' => Screening::whereHas('patient', function ($query) {
                return $query->where('full_name', 'like', '%' . $this->search . '%');
            })->with('screeningAnswers')->whereYear('created_at', $this->year)->whereMonth('created_at', $this->month)->paginate(10),
            'questionGroup' => QuestionGroup::with('questions')->get()->all()
        ]);
    }
}
