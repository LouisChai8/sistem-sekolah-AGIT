<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use function Illuminate\Support\years;

class StudentController extends Controller
{


    public function index(Request $request)
    {
        $title = "Sistem Sekolah - Daftar Siswa";

        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');

        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('nis', 'like', "%{$search}%");
                });
            })
            ->when($class, fn($query, $class) => $query->where('class', '=', $class))
            ->when($major, fn($query, $major) => $query->where('major', '=', $major))
            ->paginate(10)
            ->withQueryString();

        $schoolClasses = ['X AKL', 'XI AKL', 'XII AKL', 'X TKJ 1', 'XII TKJ 2', 'X BiD', 'XII TKj 1', 'XII TKj 2', 'XII TKj 3'];
        $majors = ['AKL', 'BiD', 'TKJ'];


        return view('students.index', [
            'title' => $title,
            'students' => $students,
            'schoolClasses' => $schoolClasses,
            'majors' => $majors
        ]);
    }

    public function show(Student $student)
    {

        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Ubah Siswa";

        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function store(StoreRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Tambahkan data siswa ke database (contoh)
        Student::create($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index');
    }

    public function update(Student $student, UpdateRequest $request)
    {
        // Validasi
        $validatedRequest = $request->validated();

        // Update data siswa
        $student->update($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        // Delete Data 
        $student->delete();

        // Handle If Success
        return redirect()->route('students.index');
    }
}