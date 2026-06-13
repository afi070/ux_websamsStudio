<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    public function run()
    {
        DB::table('films')->insert([
            ['id' => 1, 'title' => 'Tumbal Proyek', 'genre' => 'Horor, Misteri', 'status' => 'Sedang Tayang'],
            ['id' => 2, 'title' => 'Badut Gendong', 'genre' => 'Thriller / Horor', 'status' => 'Sedang Tayang'],
            ['id' => 3, 'title' => 'Sekawan Limo 2: Gunung Klawih', 'genre' => 'Komedi / Horor', 'status' => 'Sedang Tayang'],
            ['id' => 4, 'title' => 'Monster Pabrik', 'genre' => 'Sci-Fi / Misteri', 'status' => 'Sedang Tayang'],
            ['id' => 5, 'title' => 'Garuda Di Dadaku', 'genre' => 'Drama / Keluarga', 'status' => 'Akan Tayang'],
            ['id' => 6, 'title' => 'Jangan Buang Ibu', 'genre' => 'Drama / Air Mata', 'status' => 'Akan Tayang'],
            ['id' => 7, 'title' => 'Saat Aku Bersuara', 'genre' => 'Dokumenter / Sosial', 'status' => 'Akan Tayang'],
            ['id' => 8, 'title' => '402 Rumah Sakit', 'genre' => 'Horor Medis', 'status' => 'Akan Tayang'],
        ]);
    }
}