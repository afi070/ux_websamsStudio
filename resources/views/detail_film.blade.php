<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $film['title'] }} - Sams Studios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        [x-cloak] { display: none !important; }
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
                    <span class="text-4xl">S</span>
                    <span class="text-2xl lowercase italic px-[0.5px]">am</span>
                    <div class="relative flex items-baseline">
                        <span class="text-4xl">S</span>
                        <svg class="absolute -top-1.5 -right-2 w-3 h-3 text-[#cda44e]" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0l3.2 8.8 8.8 3.2-8.8 3.2-3.2 8.8-3.2-8.8-8.8-3.2 8.8-3.2z"/>
                        </svg>
                    </div>
                </div>
                <div class="absolute bottom-1 left-1/2 -translate-x-1/2 z-20">
                    <span class="text-[#cda44e] font-bold text-[9px] tracking-[0.25em] uppercase font-sans">Studios</span>
                </div>
            </div>
        </a>

        <div class="flex space-x-6 items-center">
            <a href="{{ route('film.index') }}" class="hover:text-slate-200">Film</a>
            <a href="{{ route('film.cinema') }}" class="hover:text-slate-200">Cinema</a>
            <a href="{{ route('film.kontak') }}" class="hover:text-slate-200">Kontak Kami</a>
            <a href="{{ route('film.aplikasi') }}" class="hover:text-slate-200">Aplikasi</a>
            
            <div class="relative" x-data="{ open: false }">
                <div @click="open = !open" class="flex items-center space-x-1 cursor-pointer select-none">
                    <div class="w-6 h-6 rounded-full bg-black flex items-center justify-center overflow-hidden border border-slate-400/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white translate-y-[2px]" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <div x-show="open" @click.away="open = false" x-cloak
                     class="absolute right-0 mt-3 w-64 bg-white rounded-lg shadow-xl py-2 text-slate-800 text-sm z-50 border border-slate-100">
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Data Diri
                    </a>
                    
                    <a href="#" class="flex items-center justify-between px-4 py-2 hover:bg-slate-50">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            0 Koin
                        </div>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0z"></path></svg>
                        Isi Saldo
                    </a>
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Riwayat Top-up
                    </a>
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                        Riwayat Ticket
                    </a>
                    
                    <a href="{{ route('film.watchlist') }}" class="flex items-center gap-3 px-4 py-2 hover:bg-slate-50">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        Tambahkan ke Watchlist
                    </a>

                    <div class="border-t border-slate-100 my-1"></div>
                    
                    <a href="#" class="block px-4 py-2 text-red-600 hover:bg-red-50 font-bold">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-12 py-12">
        <div class="flex flex-col md:flex-row gap-10 items-start">
            <div class="w-full md:w-72 h-[410px] shrink-0 rounded-xl overflow-hidden shadow-md bg-slate-100">
                <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" class="w-full h-full object-cover object-center">
            </div>

            <div class="flex-1 space-y-4">
                <div class="flex justify-between items-start gap-4">
                    <div>
                        <h1 class="text-3xl font-bold text-[#004785] leading-tight">{{ $film['title'] }}</h1>
                        <p class="text-sm text-slate-600 mt-1">
                            {{ $film['genre'] }} - {{ $film['durasi'] }} - {{ $film['rating_umur'] }}
                        </p>
                    </div>
                    
                    <button id="watchlistBtn" data-film-id="{{ $id ?? 1 }}" class="bg-[#004785] text-white px-3 py-1.5 rounded text-xs font-semibold flex items-center gap-1.5 shadow hover:bg-opacity-90 shrink-0 transition active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" id="bookmarkSvg" class="h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path id="bookmarkPath" stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                        <span id="btnText"> + Tambah ke Watchlist</span>
                    </button>
                </div>

                <div>
                    <h2 class="text-xl font-bold text-[#004785]">Bahasa</h2>
                    <p class="text-sm text-slate-600 mt-0.5">{{ $film['bahasa'] }}</p>
                </div>

                <div>
                    <h2 class="text-xl font-bold text-[#004785]">Sutradara</h2>
                    <p class="text-sm text-slate-600 mt-0.5">{{ $film['sutradara'] }}</p>
                </div>

                <div>
                    <h2 class="text-xl font-bold text-[#004785]">Sinopsis</h2>
                    <p class="text-sm text-slate-600 leading-relaxed mt-1 text-justify">
                        {{ $film['sinopsis'] }}
                    </p>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-200 my-10"></div>

        <div class="space-y-6">
            <h2 class="text-2xl font-bold text-black">Tayang</h2>
            <div class="flex items-center justify-center gap-3 select-none">
                <button class="w-8 h-8 rounded-full border border-slate-300 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <div class="flex gap-2 overflow-x-auto no-scrollbar py-1">
                    <div class="border-2 border-[#004785] bg-white text-[#004785] font-bold rounded-lg px-4 py-2 text-center text-sm w-20 shadow-sm cursor-pointer shrink-0">
                        <div>4 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">kam</div>
                    </div>
                    <div class="border border-slate-300 bg-white text-black font-bold rounded-lg px-4 py-2 text-center text-sm w-20 hover:border-slate-400 cursor-pointer shrink-0">
                        <div>5 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">jum</div>
                    </div>
                    <div class="border border-slate-300 bg-white text-black font-bold rounded-lg px-4 py-2 text-center text-sm w-20 hover:border-slate-400 cursor-pointer shrink-0">
                        <div>6 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">sab</div>
                    </div>
                    <div class="border border-slate-300 bg-white text-black font-bold rounded-lg px-4 py-2 text-center text-sm w-20 hover:border-slate-400 cursor-pointer shrink-0">
                        <div>7 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">min</div>
                    </div>
                    <div class="border border-slate-300 bg-white text-black font-bold rounded-lg px-4 py-2 text-center text-sm w-20 hover:border-slate-400 cursor-pointer shrink-0">
                        <div>8 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">sen</div>
                    </div>
                    <div class="border border-slate-300 bg-white text-black font-bold rounded-lg px-4 py-2 text-center text-sm w-20 hover:border-slate-400 cursor-pointer shrink-0">
                        <div>8 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">sel</div>
                    </div>
                    <div class="border border-slate-300 bg-white text-black font-bold rounded-lg px-4 py-2 text-center text-sm w-20 hover:border-slate-400 cursor-pointer shrink-0">
                        <div>9 jun</div>
                        <div class="text-xs text-slate-500 font-semibold mt-0.5">rab</div>
                    </div>
                </div>

                <button class="w-8 h-8 rounded-full border border-slate-300 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        const watchlistBtn = document.getElementById('watchlistBtn');
        const bookmarkSvg = document.getElementById('bookmarkSvg');
        const bookmarkPath = document.getElementById('bookmarkPath');
        const btnText = watchlistBtn.querySelector('span');

        watchlistBtn.addEventListener('click', function() {
            const filmId = this.getAttribute('data-film-id');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(`/watchlist/toggle/${filmId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'added') {
                    bookmarkSvg.setAttribute('fill', 'currentColor'); 
                    bookmarkPath.setAttribute('d', 'M5 3a2 2 0 00-2 2v16l7-3.5 7 3.5V5a2 2 0 00-2-2H5z');
                    btnText.innerText = 'Ditambahkan ke Watchlist';
                } else if (data.status === 'removed') {
                    bookmarkSvg.setAttribute('fill', 'none'); 
                    bookmarkPath.setAttribute('d', 'M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z');
                    btnText.innerText = '+ Tambah ke Watchlist';
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>

</body>
</html>