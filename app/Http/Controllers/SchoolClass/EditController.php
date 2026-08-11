<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
       
    public function edit($id)
    {
        $title = "Sistem Sekolah - Tambah Kelas";
        $majors = [
            ['id' => 1, 'name' => 'Akuntansi'],
            ['id' => 2, 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 3, 'name' => 'Bisnis Digital'],
        ];
        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
            ['id' => 3, 'name' => 'Ahmad Fauzi'],
        ];
        return view('classes.create', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers
        ]);
    }
}
