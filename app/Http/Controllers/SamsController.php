<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SamsController extends Controller
{
    /**
     * 1. PUSAT DATA FILM
     */
    private function getFilmsData()
    {
        return [
            0 => [
                'title' => 'Tumbal Proyek', 
                'image' => 'https://i.pinimg.com/736x/fb/14/36/fb14363e67b4a6e06d54863d51f2f2f8.jpg', 
                'status' => 'Sedang Tayang', 
                'genre' => 'Horor, Misteri', 
                'durasi' => '115 Menit', 
                'rating_umur' => 'D17+',
                'bahasa' => 'Indonesia',
                'sutradara' => 'Ahmad Yusuf',
                'sinopsis' => 'Mengisahkan tentang misteri kelam pembangunan sebuah proyek gedung tua yang terbengkalai. Satu per satu pekerja bangunan hilang secara misterius karena menjadi korban dari ritual mistis penguasa tanah demi kelancaran bisnis konstruksi raksasa.'
            ],
            1 => [
                'title' => 'Badut Gendong', 
                'image' => 'https://i.pinimg.com/736x/96/19/ae/9619aeb7cba6e68864b5a663e7e183d1.jpg', 
                'status' => 'Sedang Tayang', 
                'genre' => 'Thriller / Horor', 
                'durasi' => '98 Menit', 
                'rating_umur' => 'D17+',
                'bahasa' => 'Indonesia',
                'sutradara' => 'Rizky Ramadhan',
                'sinopsis' => 'Teror mencekam melanda sebuah pasar malam keliling ketika seorang wahana badut sirkus menyimpan dendam masa lalu. Dengan kostum usangnya yang menyeramkan, ia mulai memburu pengunjung satu per satu di kegelapan malam.'
            ],
            2 => [
                'title' => 'Sekawan Limo 2: Gunung Klawih', 
                'image' => 'https://i.pinimg.com/736x/bb/f7/97/bbf79710154dd2594091042260489a02.jpg', 
                'status' => 'Sedang Tayang', 
                'genre' => 'Komedi / Horor', 
                'durasi' => '110 Menit', 
                'rating_umur' => 'R13+',
                'bahasa' => 'Indonesia (Jawa)',
                'sutradara' => 'Bayu Skak',
                'sinopsis' => 'Kelanjutan kisah kocak lima sahabat yang kembali mendaki gunung berisiko tinggi demi sebuah konten video. Kali ini, di Gunung Klawih, mereka melanggar mitos sakral setempat yang memicu rentetan kejadian supranatural dibalut komedi segar.'
            ],
            3 => [
                'title' => 'Monster Pabrik', 
                'image' => 'https://i.pinimg.com/736x/14/88/0e/14880e1017e5f972a41a39ea4af29546.jpg', 
                'status' => 'Sedang Tayang', 
                'genre' => 'Sci-Fi / Misteri', 
                'durasi' => '125 Menit', 
                'rating_umur' => 'D17+',
                'bahasa' => 'English (Sub Indo)',
                'sutradara' => 'Hendra Kurnia',
                'sinopsis' => 'Akibat kegagalan eksperimen limbah kimia berbahaya di sebuah pabrik terisolasi, tercipta makhluk mutasi yang sangat agresif. Para karyawan yang terjebak di dalam fasilitas harus berjuang bertahan hidup di tengah kepungan monster.'
            ],
            4 => [
                'title' => 'Garuda Di Dadaku', 
                'image' => 'https://www.jadwalnonton.com/data/images/movies/2026/Poster-Garuda-Didadak-u_300x450.webp', 
                'status' => 'Akan Tayang', 
                'genre' => 'Drama / Keluarga', 
                'durasi' => '105 Menit', 
                'rating_umur' => 'SU (Semua Umur)',
                'bahasa' => 'Indonesia',
                'sutradara' => 'Ifa Isfansyah',
                'sinopsis' => 'Kisah inspiratif seorang anak laki-laki berbakat yang bermimpi besar menjadi pemain sepak bola profesional tim nasional Indonesia, meskipun ia harus berhadapan dengan tentangan keras dari sang kakek demi masa depan akademisnya.'
            ],
            5 => [
                'title' => 'Jangan Buang Ibu', 
                'image' => 'https://i.pinimg.com/736x/d4/02/67/d40267e7695ad469ff7f30b3ccb12bfd.jpg', 
                'status' => 'Akan Tayang', 
                'genre' => 'Drama / Air Mata', 
                'durasi' => '100 Menit', 
                'rating_umur' => 'R13+',
                'bahasa' => 'Indonesia',
                'sutradara' => 'Bernardus Raka',
                'sinopsis' => 'Sebuah drama keluarga yang menyentuh hati tentang pengorbanan tanpa pamrih seorang ibu tua, dan dinamika hubungan emosional anak-anaknya yang mulai sibuk dengan gemerlapnya kehidupan kota besar hingga melupakan rumah.'
            ],
            6 => [
                'title' => 'Saat Aku Bersuara', 
                'image' => 'https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=400&auto=format&fit=crop', 
                'status' => 'Akan Tayang', 
                'genre' => 'Dokumenter / Sosial', 
                'durasi' => '90 Menit', 
                'rating_umur' => 'R13+',
                'bahasa' => 'Indonesia',
                'sutradara' => 'Siti Aminah',
                'sinopsis' => 'Mengangkat perjuangan seorang jurnalis muda dalam menyuarakan hak-hak komunitas terpinggirkan di pinggiran kota, melawan pembungkaman dan ketidakadilan demi mengungkap kebenaran yang tertimbun.'
            ],
            7 => [
                'title' => '402 Rumah Sakit', 
                'image' => 'https://trenddjakarta.com/wp-content/uploads/2026/04/402-RSAK-1080x1080px-1.jpg', 
                'status' => 'Akan Tayang', 
                'genre' => 'Horor Medis', 
                'durasi' => '112 Menit', 
                'rating_umur' => 'D17+',
                'bahasa' => 'Indonesia',
                'sutradara' => 'Dedi Wijaya',
                'sinopsis' => 'Kamar nomor 402 di sebuah rumah sakit tua menyimpan legenda urban yang mengerikan. Setiap pasien yang dipindahkan ke kamar tersebut mulai melihat manifestasi makhluk gaib dari rekam medis masa lalu yang kelam.'
            ]
        ];
    }

    /**
     * 2. HALAMAN UTAMA
     */
    public function index()
    {
        $cities = ['Cianjur', 'Gombong', 'Indramayu', 'Kebumen', 'Klaten', 'Labuan Bajo', 'Nganjuk', 'Pasuruan', 'Pekalongan', 'Pemalang', 'Probolinggo', 'Salatiga', 'Solo', 'Subang', 'Sukabumi', 'Ungaran'];
        $allFilms = $this->getFilmsData();
        $nowShowing = array_filter($allFilms, fn($f) => $f['status'] === 'Sedang Tayang');
        $comingSoon = array_filter($allFilms, fn($f) => $f['status'] === 'Akan Tayang');

        return view('film', compact('cities', 'nowShowing', 'comingSoon'));
    }

    /**
     * 3. HALAMAN DETAIL
     */
    public function show($id)
    {
        $allFilms = $this->getFilmsData();
        if (!array_key_exists($id, $allFilms)) abort(404);

        $film = $allFilms[$id];
        
        $watchlist = session()->get('watchlist', []);
        $isFavorite = in_array($id, $watchlist);

        return view('detail_film', compact('film', 'id', 'isFavorite'));
    }

    /**
     * 4. FUNGSI TOGGLE WATCHLIST (AJAX)
     */
    public function toggleWatchlist($id)
    {
        $allFilms = $this->getFilmsData();
        if (!array_key_exists($id, $allFilms)) {
            return response()->json(['error' => 'Film tidak ditemukan'], 404);
        }

        $watchlist = session()->get('watchlist', []);

        if (in_array($id, $watchlist)) {
            $watchlist = array_diff($watchlist, [$id]);
            $status = 'removed';
        } else {
            $watchlist[] = $id;
            $status = 'added';
        }

        session()->put('watchlist', $watchlist);
        return response()->json(['status' => $status]);
    }

 /**
     * 5. HALAMAN DAFTAR WATCHLIST
     */
    public function watchlist()
    {
        $watchlistIds = session()->get('watchlist', []);
        $allFilms = $this->getFilmsData();

        $myWatchlist = [];
        foreach ($watchlistIds as $id) {
            if (isset($allFilms[$id])) {
                $filmData = $allFilms[$id];
                $filmData['id'] = $id; 
                $myWatchlist[] = $filmData;
            }
        }

        // PERUBAHAN DI SINI:
        // Sebelumnya: return view('watchlist', ...);
        // Menjadi (sesuai folder views/film/watchlist.blade.php):
        return view('film.watchlist', compact('myWatchlist'));
    }

    public function cinema() { return "Halaman Cinema - Sams Studios"; }
    public function kontak() { return "Halaman Kontak - Sams Studios"; }
    public function aplikasi() { return "Halaman Aplikasi - Sams Studios"; }
}