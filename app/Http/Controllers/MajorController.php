<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Jurusan";
        $majors = [

            [

                'id' => 1,

                'code' => 'AKL',

                'name' => 'Akuntansi dan Keuangan Lembaga',

                'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',

            ],

            [

                'id' => 2,

                'code' => 'TKJ',

                'name' => 'Teknik Komputer dan Jaringan',

                'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',

            ],

            [

                'id' => 3,

                'code' => 'BD',

                'name' => 'Bisnis Digital',

                'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',

            ],

        ];
        return view('majors.index', [
            'title' => $title,
            'majors' => $majors
        ]);
    }

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Jurusan";
        $major = [
            'id' => $id,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.'
        ];
        return view('majors.show', [
            'title' => $title,
            'major' => $major
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Jurusan";
        return view('majors.create', [
            'title' => $title
        ]);
    }

    public function edit($id)
    {
        $title = "Sistem Sekolah - Edit Jurusan";
        $major = [
            'id' => $id,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.'
        ];

        return view('majors.edit', [
            'title' => $title,
            'major' => $major
        ]);
    }

    public function store()
    {
        return "Menambah data jurusan baru";
    }

    public function update(string $id)
    {
        return "Mengubah data jurusan dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan dengan ID: {$id}";
    }
}