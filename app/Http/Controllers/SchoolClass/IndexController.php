<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    
    public function __invoke(Request $request)
    {
        $title = "Sistem Sekolah - Daftar Kelas";
        $classes = [

            [

                'id' => 1,

                'name' => 'XII AKL 1',

                'grade' => 'XII',

                'major' => 'AKL',

                'homeroom_teacher' => 'Budi Santoso'

            ],

            [

                'id' => 2,

                'name' => 'XII TKJ 1',

                'grade' => 'XII',

                'major' => 'TKJ',

                'homeroom_teacher' => 'Siti Aminah'

            ]

        ];
        return view('SchoolClass.index', [
            'title' => $title,
            'classes' => $classes
        ]); 
    }
}
