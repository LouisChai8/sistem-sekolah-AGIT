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

    <main class="mx-auto w-full max-w-2xl flex-1 px-6 py-10">



        <div class="mb-8 border-b border-[#E5E3DB] pb-5">

            <a href="#" class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">&larr; Buku

                Induk</a>

            <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">Ubah Data Siswa</h1>

            <p class="mt-1 text-sm text-slate-500">Memperbarui catatan atas nama <span
                    class="font-medium text-[#16213A]">Budi Ariyanto</span>.</p>
        </div>



        <form action="" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">

            <div>

                <label for="nis"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">NIS</label>

                <input type="text" id="nis" name="nis" value="2024001"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

            </div>



            <div>

                <label for="name"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama

                    Lengkap</label>

                <input type="text" id="name" name="name" value="Budi Ariyanto"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

            </div>



            <div>

                <label for="gender"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Jenis
                    Kelamin</label>

                <select id="gender" name="gender"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                    <option value="L" selected>Laki-laki</option>

                    <option value="P">Perempuan</option>

                </select>

            </div>



            <div>

                <label for="major"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Jurusan</label>

                <select id="major" name="major"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                    <option value="" selected>AKL</option>

                    <option value="">TKJ</option>

                    <option value="">BiD</option>

                </select>

            </div>



            <div>

                <label for="class"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Kelas</label>

                <input type="text" id="class" name="class" value="XII AKL 1"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

            </div>



            <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

                <a href="" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>

                <button type="submit"
                    class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Perbarui

                    Catatan</button>

            </div>

        </form>



    </main>



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