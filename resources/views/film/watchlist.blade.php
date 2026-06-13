<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchlist Saya - Sams Studios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f0f4f8; }
    </style>
</head>
<body class="text-slate-800">

    <nav class="bg-[#004785] text-white px-6 py-2 flex justify-between items-center text-sm font-semibold shadow-md">
        <a href="{{ route('film.index') }}" class="flex items-center cursor-pointer select-none py-2">
            <div class="relative w-44 h-16 flex items-center justify-center">
                <svg class="absolute w-24 h-24 text-[#cda44e] opacity-90" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 76 24 A 36 36 0 1 0 52 86 A 36 36 0 0 0 84 64" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <div class="relative z-10 flex items-baseline font-serif text-[#cda44e] font-bold select-none tracking-tight">
                    <span class="text-4xl">S</span><span class="text-2xl lowercase italic px-[0.5px]">am</span>
                    <div class="relative flex items-baseline"><span class="text-4xl">S</span>
                        <svg class="absolute -top-1.5 -right-2 w-3 h-3 text-[#cda44e]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0l3.2 8.8 8.8 3.2-8.8 3.2-3.2 8.8-3.2-8.8-8.8-3.2 8.8-3.2z"/></svg>
                    </div>
                </div>
                <div class="absolute bottom-1 left-1/2 -translate-x-1/2 z-20"><span class="text-[#cda44e] font-bold text-[9px] tracking-[0.25em] uppercase font-sans">Studios</span></div>
            </div>
        </a>
        <div class="flex space-x-6 items-center">
            <a href="{{ route('film.index') }}" class="hover:text-slate-200">Film</a>
            <a href="{{ route('film.cinema') }}" class="hover:text-slate-200">Cinema</a>
            <a href="{{ route('film.kontak') }}" class="hover:text-slate-200">Kontak Kami</a>
            <a href="{{ route('film.aplikasi') }}" class="hover:text-slate-200">Aplikasi</a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-12 py-12 mb-24">
        <div class="mb-10">
            <h1 class="text-3xl font-extrabold text-black">Watchlist Saya</h1>
            <p class="text-slate-600 mt-2 max-w-2xl leading-relaxed">
                Daftar film yang ingin kamu tonton. Simpan film favoritmu, dan tonton kapan saja di Sams Studios terdekat.
            </p>
        </div>

        @if(count($myWatchlist) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($myWatchlist as $film)
                    <div id="card-{{ $film['id'] }}" class="relative group">
                        <button onclick="removeFromWatchlist('{{ $film['id'] }}')" class="absolute -top-3 -right-3 z-30 bg-slate-200 border border-slate-300 text-slate-600 w-8 h-8 rounded-full flex items-center justify-center shadow-md hover:bg-slate-300 hover:text-slate-800 transition active:scale-90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200 flex flex-col h-full hover:shadow-lg transition-all duration-300">
                            <div class="aspect-[3/4] overflow-hidden bg-slate-200">
                                <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="p-4 flex flex-col flex-grow">
                                <h3 class="font-bold text-[#004785] text-lg leading-tight mb-2">{{ $film['title'] }}</h3>
                                <p class="text-xs text-slate-500 font-semibold mb-2">{{ $film['genre'] }}</p>
                                
                                <div class="flex items-center gap-1.5 text-blue-600 py-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-[11px] font-bold">Tayang 20 Juni 2026</span>
                                </div>

                                <div class="mt-auto">
                                    <a href="{{ route('film.show', $film['id']) }}" class="block w-full text-center border-2 border-slate-300 text-slate-700 font-bold py-2 rounded-xl text-xs hover:bg-[#004785] hover:border-[#004785] hover:text-white transition-all duration-300">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white rounded-3xl p-12 text-center border border-dashed border-slate-300">
                <p class="text-slate-400 font-bold">Wah, belum ada film yang kamu simpan.</p>
                <a href="{{ route('film.index') }}" class="mt-4 inline-block text-blue-600 font-bold underline">Cari Film Sekarang</a>
            </div>
        @endif
    </div>

    <script>
        function removeFromWatchlist(filmId) {
            if(!confirm('Hapus film ini dari watchlist?')) return;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            fetch(`/watchlist/toggle/${filmId}`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'removed') {
                    const card = document.getElementById(`card-${filmId}`);
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.9)';
                    setTimeout(() => {
                        card.remove();
                        if(document.querySelectorAll('[id^="card-"]').length === 0) {
                            window.location.reload();
                        }
                    }, 300);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>