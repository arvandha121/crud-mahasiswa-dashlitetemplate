<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CitiesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Mahasiswa::selectRaw('kota, COUNT(*) as total_count')
            ->groupBy('kota')
            ->orderBy('id', 'asc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Kota',
            'Total Count',
        ];
    }
}
