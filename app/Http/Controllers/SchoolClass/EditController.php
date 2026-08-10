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
        $title = "Sistem Sekolah - Ubah Kelas";
        return view('classes.edit', [
            'title' => $title
        ]);
    }
}
