@extends('layouts.app')

@section('title', $title)

@section('content')


    <div class="mb-8 border-b border-[#E5E3DB] pb-5">
        <a href="{{ route('classes.index') }}" class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">&larr; Buku Induk</a>
        <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">Ubah Data Kelas</h1>
        <p class="mt-1 text-sm text-slate-500">Memperbarui catatan atas kelas <span class="font-medium text-[#16213A]">XII AKL 1</span>.</p>
    </div>

    <form action="{{ route('classes.update', ['id' => $class['id']]) }}" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">
        @csrf
        @method('PUT')

        <div>
            <label for="name"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama Kelas</label>
            <input type="text" id="name" name="name" value="XII AKL 1"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="grade" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Tingkat</label>
            <select id="grade" name="grade"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                <option value="X" selected>X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>

        <div>
            <label for="major_id"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Jurusan</label>

            <select id="major_id" name="major_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="">Pilih Jurusan</option>

                @foreach ($majors as $major)
                    <option value="{{ $major['id'] }}">
                        {{ $major['name'] }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="phone" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nomor
                Telepon</label>
            <input type="text" id="phone" name="phone" value="081234560001"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        <div>
            <label for="teacher_id" class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Wali Kelas
            </label>

            <select id="teacher_id" name="teacher_id"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="">Pilih Wali Kelas</option>

                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher['id'] }}">
                        {{ $teacher['name'] }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a href="{{ route('classes.index') }}" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>

            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Perbarui

                Catatan</button>

        </div>

    </form>



@endsection