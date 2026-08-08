<?php

namespace App\Http\Controllers;

class TeachersController extends Controller
{
    

    public function index()
    {
        return "Ini adalah halaman daftar guru";
    }

    public function show(string $id)
    {
        return "Ini adalah halaman detail guru dengan ID: {$id}";
    }

    public function create()
    {
        return "Ini adalah halaman tambah guru";
    }

    public function edit($id)
    {
        return "Menampilkan halaman edit guru dengan ID: {$id}";
    }

    public function store()
    {
        return "Menambah data guru baru";
    }

    public function update(string $id)
    {
        return "Mengubah data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}