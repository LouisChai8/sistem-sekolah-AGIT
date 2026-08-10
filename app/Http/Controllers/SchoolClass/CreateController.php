<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function create()
    {
        $title = "Sistem Sekolah - Tambah Kelas";
        return view('classes.create', [
            'title' => $title
        ]);
    }
}
