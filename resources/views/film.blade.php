<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sams Studios - S Besar Depan Belakang Sempurna</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #ffffff; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="text-slate-800">

    <nav class="bg-[#004785] text-white px-6 py-2 flex justify-between items-center text-sm font-semibold shadow-md">
        
        <div class="flex items-center cursor-pointer select-none py-2">
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
        </div>

        <div class="flex space-x-6 items-center">
            <a href="{{ route('film.index') }}" class="border-b-2 border-white pb-1">Film</a>
            <a href="{{ route('film.cinema') }}" class="hover:text-slate-200">Cinema</a>
            <a href="{{ route('film.kontak') }}" class="hover:text-slate-200">Kontak Kami</a>
            <a href="{{ route('film.aplikasi') }}" class="hover:text-slate-200">Aplikasi</a>
            
            <div class="relative" x-data="{ open: false }">
                <div @click="open = !open" class="flex items-center space-x-1 cursor-pointer select-none py-1 px-2 rounded-lg hover:bg-[#003870] transition">
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
                     class="absolute right-0 mt-3 w-64 bg-white rounded-lg shadow-xl py-2 text-slate-800 text-sm z-50 border border-slate-100 font-bold">
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-50 transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Data Diri
                    </a>
                    <a href="#" class="flex items-center justify-between px-4 py-2.5 hover:bg-slate-50 transition">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            0 Koin
                        </div>
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-50 transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0z"></path></svg>
                        Isi Saldo
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-50 transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Riwayat Top-up
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-50 transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                        Riwayat Ticket
                    </a>
                    <a href="{{ route('film.watchlist') }}" class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-50 transition">
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                        Tambahkan ke Watchlist
                    </a>
                    <div class="border-t border-slate-100 my-1"></div>
                    <a href="#" class="block px-4 py-2 text-red-600 hover:bg-red-50 transition">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-[#f0dfc8] relative overflow-hidden px-8 py-12 flex flex-col md:flex-row justify-between items-center min-h-[340px]">
        <div class="flex flex-col items-start z-10 space-y-3 mb-6 md:mb-0">
            <div class="bg-[#003870] text-white p-6 rounded-br-[40px] rounded-tl-[20px] shadow-lg flex flex-col items-center justify-center transform -rotate-2">
                <span class="text-3xl font-extrabold tracking-tight">BUY <span class="text-5xl text-yellow-400">1</span></span>
                <span class="text-4xl font-black text-yellow-400 my-1 tracking-wide border-y-2 border-yellow-400 px-2">GET 1</span>
                <span class="text-2xl font-bold bg-cyan-400 text-[#003870] px-4 py-0.5 mt-2 rounded font-mono tracking-widest">FREE!</span>
            </div>
            <p class="text-[11px] text-slate-600 italic font-semibold">*Syarat & Ketentuan Berlaku</p>
        </div>

        <div class="text-center z-10 flex flex-col items-center space-y-4 max-w-md">
            <div>
                <p class="text-[#003870] font-black text-sm tracking-widest mb-1">PERIODE</p>
                <div class="bg-cyan-500 text-white font-bold px-6 py-1.5 rounded-full shadow-inner text-sm tracking-wide">
                    04 - 06 JUN 2026
                </div>
            </div>
            <p class="text-[#003870] font-bold text-xs uppercase tracking-tight max-w-xs leading-relaxed">
                Promo ini hanya berlaku di Sams Studios Pulau Jawa <br>
                <span class="text-red-600">kecuali Labuan Bajo</span>
            </p>
        </div>

        <div class="relative w-full md:w-[450px] h-[220px] bg-cover bg-center rounded-lg shadow-md overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=600&auto=format&fit=crop');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex flex-col justify-end p-4 text-white">
                <div class="bg-yellow-400 text-black font-black text-xs px-2 py-1 rounded w-max mb-1">NOBODY LOVES KAY</div>
                <p class="text-[10px] opacity-80 uppercase tracking-widest">Sebuah Film Karya Bernardus Raka</p>
            </div>
        </div>
    </div>

    <div class="bg-[#002f5c] text-white text-center py-2 text-xs font-semibold tracking-wide">
        Dapatkan Tiketnya di <span class="bg-yellow-500 text-black px-1.5 py-0.5 rounded text-[10px] font-bold mx-1">WEB & APP: SAMSSTUDIOS.ID</span> TicketBox
    </div>

    <div class="max-w-6xl mx-auto px-6 py-8">
        
        <div class="flex items-center space-x-3 mb-8">
            <span class="text-lg font-bold text-[#004785]">Film</span>
            <div class="relative">
                <select class="appearance-none bg-white border border-slate-300 text-slate-700 py-1.5 px-4 pr-10 rounded leading-tight focus:outline-none focus:border-blue-500 text-sm font-semibold cursor-pointer shadow-sm">
                    <option disabled>Pilih Kota</option>
                    @foreach($cities as $city)
                        <option {{ $city == 'Cianjur' ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-slate-500">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-12">
            @foreach($nowShowing as $id => $film)
                <a href="{{ route('film.show', $id) }}" class="flex flex-col items-center text-center group cursor-pointer">
                    <div class="w-full aspect-[3/4] bg-slate-200 rounded-lg shadow-md overflow-hidden mb-3 border border-slate-100 transition duration-300 group-hover:shadow-xl">
                        <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-sm font-bold text-[#004785] group-hover:text-blue-600 transition">{{ $film['title'] }}</h3>
                </a>
            @endforeach
        </div>

        <div class="mb-4">
            <h2 class="text-lg font-bold text-[#004785] mb-6">Akan Tayang</h2>
        </div>
        
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-16">
            @foreach($comingSoon as $id => $film)
                <a href="{{ route('film.show', $id) }}" class="flex flex-col items-center text-center group cursor-pointer">
                    <div class="w-full aspect-[3/4] bg-slate-200 rounded-lg shadow-md overflow-hidden mb-3 border border-slate-100 transition duration-300 group-hover:shadow-xl">
                        <img src="{{ $film['image'] }}" alt="{{ $film['title'] }}" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-sm font-bold text-[#004785] group-hover:text-blue-600 transition">{{ $film['title'] }}</h3>
                </a>
            @endforeach
        </div>

    </div>

    <footer class="border-t border-slate-200 py-6 text-center text-xs font-bold text-slate-500">
        &copy; 2026 <span class="text-slate-800 font-extrabold ml-1">Mega Kreasi Tech</span>
    </footer>

</body>
</html>