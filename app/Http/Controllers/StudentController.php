<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            ['id' => 1, 
            'name' => 'Andi', 
            'class' => 'XII TKJ 1',
            'major' => 'Teknik Komputer dan Jaringan',
            'nis' => '1234567890',
            ],
            
            ['id' => 2, 
            'name' => 'Budi', 
            'class' => 'XII AKL 1',
            'major' => 'Akuntansi',
            'nis' => '0987654321',
            ],

            ['id' => 3, 
            'name' => 'Lyne', 
            'class' => 'XII BID',
            'major' => 'Bisnis Digital',
            'nis' => '1122334455',
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]); 
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        return view('students.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Ubah Siswa";
        return view('students.edit', [
            'title' => $title
        ]);
    }

    public function store()
    {
        return "Menambah data siswa baru";
    }

    public function update(string $id)
    {
        return "Mengubah data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }
}