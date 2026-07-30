<!DOCTYPE html>

<html lang="id">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>



<body class="flex min-h-screen flex-col bg-[#F7F6F2] text-slate-700">



    {{-- Header Start--}}

    <header class="bg-[#16213A] text-white">

        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-5">

            <a href="" class="flex items-center gap-3">

                <span>

                    <span class="font-display block text-lg font-semibold leading-none">Sistem Sekolah</span>

                    <span class="text-[11px] uppercase tracking-[0.2em] text-white/50">Buku Induk Siswa</span>

                </span>

            </a>
            <nav class="hidden gap-8 text-sm md:flex">

                <a href="#" class="text-white/55 hover:text-white">Siswa</a>

                <a href="#" class="text-white/55 hover:text-white">Guru</a>

                <a href="#" class="text-white/55 hover:text-white">Kelas</a>

                <a href="#" class="text-white/55 hover:text-white">Jurusan</a>

            </nav>

        </div>

        <div class="h-0.5 bg-[#A16207]"></div>

    </header>

    {{-- Header End --}}



    {{-- Content Start --}}

    <main class="mx-auto w-full max-w-5xl flex-1 px-6 py-10">



        <div class="mb-8 flex items-end justify-between border-b border-[#E5E3DB] pb-5">

            <div>

                <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">Tahun Ajaran 2025/2026</p>

                <h1 class="font-display text-3xl font-semibold text-[#16213A]">Daftar Siswa</h1>

            </div>

            <a href="" class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">

                Catat Siswa Baru

            </a>
        </div>



        <div class="border border-[#E5E3DB] bg-white">

            <table class="w-full text-left text-sm">

                <thead>

                    <tr class="border-b border-[#16213A] text-[11px] uppercase tracking-[0.15em] text-[#16213A]">

                        <th class="w-14 px-5 py-3.5 font-semibold">No.</th>

                        <th class="px-5 py-3.5 font-semibold">NIS</th>

                        <th class="px-5 py-3.5 font-semibold">Nama Siswa</th>

                        <th class="px-5 py-3.5 font-semibold">Kelas</th>

                        <th class="px-5 py-3.5 font-semibold">Jurusan</th>

                        <th class="px-5 py-3.5 text-right font-semibold">Tindakan</th>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr class="border-b border-[#EFEDE6] hover:bg-[#FAF9F5]">

                            <td class="px-5 py-4 font-display text-lg text-[#A16207]">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-5 py-4 font-mono text-xs text-slate-500">
                                {{ $student['nis'] }}
                            </td>

                            <td class="px-5 py-4 font-medium text-[#16213A]">
                                {{ $student['name'] }}
                            </td>

                            <td class="px-5 py-4">
                                {{ $student['class'] }}
                            </td>

                            <td class="px-5 py-4">
                                {{ $student['major'] }}
                            </td>

                            <td class="px-5 py-4">
                                <div class="flex justify-end gap-4 text-xs font-medium">

                                    <a href="" class="text-[#16213A] hover:text-[#A16207]">Lihat</a>

                                    <a href="" class="text-[#16213A] hover:text-[#A16207]">Ubah</a>

                                    <form action="" method="POST"
                                        onsubmit="return confirm('Hapus data siswa ini dari buku induk?')">



                                        <button type="submit" class="text-red-700 hover:text-red-900">Hapus</button>

                                    </form>

                                </div>

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </main>

    {{-- Content End --}}



    {{-- Footer Start --}}

    <footer class="border-t border-[#E5E3DB]">

        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-6 text-xs text-slate-400">

            <span>&copy; 2026 Sistem Sekolah</span>

            <span class="uppercase tracking-[0.15em]">Media Pembelajaran SMK</span>
        </div>

    </footer>

    {{-- Footer End --}}



</body>



</html>